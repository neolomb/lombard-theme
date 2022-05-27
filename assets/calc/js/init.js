var ajaxgo = false;

function numberWithSpaces(x) {
    var parts = x.toString().split(".");
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, " ");
    return parts.join(".");
}

jQuery(document).ready(function ($) {
    $('select').select2();

    const getNumber = (arr, searchNumer) => arr.find(it => Math.abs(it - searchNumer) === Math.min(...arr.map(it => Math.abs(it - searchNumer))));
    var arraySample = [375, '583/585', 750, 900, 958, 999];
    var arraySampleValue = [375, 585, 750, 900, 958, 999];

    $('.slider.slider-weight')
        .slider({
            min: 0.1,
            max: 100.0,
            step: 0.1,
            value: 10.0,
            range: 'min',
            animate: 0
        })
        .slider('pips', {
            first: false,
            last: false,
            rest: false
        })
        .slider('float', {})
        .on('slide', function (e, ui) {
            $('input[name="weight"]').val(ui.value);
        });

    $('.slider.slider-sample')
        .slider({
            min: 0,
            range: 'min',
            max: arraySampleValue.length - 1,
            step: 1,
            value: 1,
            animate: 0
        })
        .slider('pips', {
            rest: 'label',
            labels: arraySample
        })
        .slider('float', {
            labels: arraySample
        })
        .on('slide', function (e, ui) {
            $('input[name="sample"]').val(arraySampleValue[ui.value]);
        })
        .on('slidechange', function (e, ui) {
            $('input[name="sample"]').val(arraySampleValue[ui.value]);
        });

    $('.slider.slider-piece-weight')
        .slider({
            range: "min",
            min: 0.1,
            max: 5.0,
            step: 0.01,
            value: 1.0,
            animate: 0
        })
        .slider('pips', {
            first: false,
            last: false,
            rest: false
        })
        .slider('float', {})
        .on('slide', function (e, ui) {
            $('input[name="piece_weight"]').val(ui.value);
        });

    $('.slider.slider-time')
        .slider({
            min: 61,
            max: 90,
            range: 'min',
            step: 1,
            value: 61,
            animate: 0
        })
        .slider('pips', {
            step: 5,
            rest: 'label'
        })
        .slider('float', {})
        .on('slide', function (e, ui) {
            $('input[name="time"]').val(ui.value);
        })
        .on('slidechange', function (e, ui) {
            $('input[name="time"]').val(ui.value);
        });

    $(document)
        .on('change', 'select[name="piece"]', function (e) {
            if ($(this).val() != 0)
                $('.has_too').addClass('show');
            else
                $('.has_too').removeClass('show');
        })
        .on('change keyup', 'input[name="weight"]', function (e) {
            if (parseFloat($(this).val()) < $(this).attr('min'))
                $(this).val($(this).attr('min'));
            else if (parseFloat($(this).val()) > $(this).attr('max'))
                $(this).val($(this).attr('max'));
            $('.slider.slider-weight').slider('value', $(this).val());
        })
        .on('change', 'input[name="sample"]', function (e) {
            let findValue = getNumber(arraySampleValue, $(this).val());
            let index = arraySampleValue.findIndex(el => el === findValue);
            $(this).val(findValue);
            $('.slider.slider-sample').slider('value', index);
        })
        .on('change keyup', 'input[name="piece_weight"]', function (e) {
            if (parseFloat($(this).val()) < $(this).attr('min'))
                $(this).val($(this).attr('min'));
            else if (parseFloat($(this).val()) > $(this).attr('max'))
                $(this).val($(this).attr('max'));
            $('.slider.slider-piece-weight').slider('value', $(this).val());
        })
        .on('change', 'input[name="time"]', function (e) {
            if ($(this).val() < $(this).attr('min'))
                $(this).val($(this).attr('min'));
            else if ($(this).val() > $(this).attr('max'))
                $(this).val($(this).attr('max'));
            $('.slider.slider-time').slider('value', $(this).val());
        })
        .on('submit', 'form[name="calculator"]', function (e) {
            e.preventDefault();
        })
        .on('click', 'button.calc-process', function (e) {
            e.preventDefault();
            calcProcess();
			$('html, body').animate({
				scrollTop: $('.total_block').offset().top -80
			}, 500);
        })
        .on('click', 'button.calc-promo', function (e) {
            $('body').addClass('no_scroll');
            $('.popup').addClass('active');
        })
        .on('click', '.popup_close', function (e) {
            $('body').removeClass('no_scroll');
            $('.popup').removeClass('active');
        })
        .on('click', '.popup_close-js', function (e) {
            $('body').removeClass('no_scroll');
            $('.popup').removeClass('active');
        })
        .on('click', '.popup_overlay', function (e) {
            $('body').removeClass('no_scroll');
            $('.popup').removeClass('active');
        })
		.on('keyup', '#form-promocode input', function () {
			$(this).removeClass('wpcf7-not-valid');
		})
		.on('submit', '#form-promocode', function (e) {
			e.preventDefault();
			var userform = $(this);
			console.log(userform.serialize(), 'serialized user form')
			let error = formValidate(userform);
			if (error)
				return false;
			
			$.ajax({
				type: 'POST',
				url: ajax_var.url,
				dataType: 'json',
				data: userform.serialize(),
				beforeSend: function () {
					$('#form-promocode input, #form-promocode select').removeClass('wpcf7-not-valid');
					userform.find('.response').remove();
					if (ajaxgo) {
						userform.append('<div class="response error">Пожалуйста, дождитесь ответа от предыдущего запроса.</div>');
						return false;
					}
					ajaxgo = true;
				},
				success: function (data, statusText, xhr) {
					if (data.success) {
						$('.calculator .popup-form').remove();
						$('.calculator .popup-text').html(data.data.message);
						$('.calculator .popup_name').html(data.data.title);
					} else {
						userform.append('<div class="response error">' + data.data.message + '</div>');
					}
					ajaxgo = false;
				},
				error: function (data) {
					ajaxgo = false;
					console.log(arguments);
				}
			});
		});
	
	function formValidate(thisForm) {
		$('#form-promocode input, #form-promocode select').removeClass('wpcf7-not-valid');
		let error = 0;
		thisForm.find('.calc-input').each(function() {
			if ($(this).val() == '') {
				error = 1;
				$(this).addClass('wpcf7-not-valid');
			} /* else if ($(this).attr('name') == 'client-email') {
				const regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				if (!regex.test($(this).val())) {
					error = 1;
					$(this).addClass('wpcf7-not-valid');
				}
			} */
		});
		
		return error;
	}
	
	const callback = (cost) => {
		let costPromo = calc_params.cost;

		if (!cost) {
			cost = calc_params.cost
		}

        const weight = parseFloat($('form[name="calculator"] input[name="weight"]').val());
        const sample = parseInt($('form[name="calculator"] input[name="sample"]').val());
        const wear = parseInt($('form[name="calculator"] select[name="wear"]').val());
        const piece = parseInt($('form[name="calculator"] select[name="piece"]').val());
        const pieceWeight = parseFloat($('form[name="calculator"] input[name="piece_weight"]').val());
        const time = parseInt($('form[name="calculator"] input[name="time"]').val());
        const client = parseInt($('form[name="calculator"] select[name="client"]').val());
        const buying = $('form[name="calculator"] input[name="buying"]:checked').val()
			? $('form[name="calculator"] input[name="buying"]:checked').val()
			: 0;

		// в зависимости от степени износа изменяем цену за грамм с учётом повышаюшего или понижающего коэффициента
        if (wear == 2) {
			// среднее состояние
			cost = cost / (1 - 0.67 / 100); // 2500
		} else if (wear == 3) {
			// низкое состояние
			cost = cost / (1 + 3.36 / 100); // 2400
		} else {
			// высокое состояние
			cost = cost / (1 - 4.7 / 100);
		}

        if (sample != 585) {
			cost = cost / 585 * sample;
		}

        if (piece && pieceWeight >= 0.1) {
			if (buying == 0) {
				costPromo = (70 * weight > 20000 ? 20000 : 70 * weight) + cost * weight;
				cost *= weight;
				costPromo += (50 * weight > 10000 ? 10000 : 50 * weight);
				cost += (50 * weight > 10000 ? 10000 : 50 * weight);
			} else {
				costPromo = (50 * weight > 10000 ? 10000 : 50 * weight) + cost * weight;
				cost *= weight;
			}
			
            let costVstav = 0;
            switch (piece) {
                case 1:
                    {
                        if (pieceWeight >= 0.1 && pieceWeight < 0.31)
                            costVstav = 25000;
                        if (pieceWeight >= 0.31 && pieceWeight < 0.71)
                            costVstav = 50000;
                        if (pieceWeight >= 0.71 && pieceWeight < 1.0)
                            costVstav = 75000;
                        if (pieceWeight >= 1.0 && pieceWeight < 2.01)
                            costVstav = 150000;
                        if (pieceWeight >= 2.01)
                            costVstav = 300000;
						
						cost += costVstav * pieceWeight;
						costPromo += costVstav * pieceWeight + (costVstav * pieceWeight * 0.05);
                        break;
                    }
                case 2:
                case 3:
                case 4:
                    {
                        if (pieceWeight >= 0.1 && pieceWeight < 0.51)
                            costVstav = 0;
                        if (pieceWeight >= 0.51 && pieceWeight < 2.1)
                            costVstav = 30000;
                        if (pieceWeight >= 2.1 && pieceWeight < 3.1)
                            costVstav = 50000;
                        if (pieceWeight >= 3.1)
                            costVstav = 100000;
						
						cost += costVstav * pieceWeight;
						costPromo += costVstav * pieceWeight + (costVstav * pieceWeight * 0.1);
                        break;
                    }
            }
        } else {
			if (buying == 0) {
				costPromo = (50 * weight > 10000 ? 10000 : 50 * weight) + cost * weight;
				cost *= weight;
				costPromo += (50 * weight > 10000 ? 10000 : 50 * weight);
				cost += (50 * weight > 10000 ? 10000 : 50 * weight);
			} else {
				costPromo = (30 * weight > 5000 ? 5000 : 30 * weight) + cost * weight;
				cost *= weight;
			}
		}

        let rate = 0;
        let loanCostDay = 0;
        let loanCostAll = 0;
		
		if (cost < 5001 && client != 1)
			rate = 0.35;
		else if (cost >= 5001 && cost < 10001 && client != 1)
			rate = 0.35;
		else if (cost >= 5001 && cost < 10001 && client != 1)
			rate = 0.35;
		else if (cost >= 10001 && cost < 20001 && client != 1)
			rate = 0.35;
		else if (cost >= 20001 && cost < 50001 && client != 1)
			rate = 0.3;
		else if (cost >= 50001 && cost < 100001)
			rate = 0.27;
		else if (cost >= 100001 && cost < 250001)
			rate = 0.25;
		else if (cost >= 250001 && cost < 500001)
			rate = 0.22;
		else if (cost >= 500001)
			rate = 0.2;

        if (time && rate && cost) {
            loanCostDay = cost / 100 * rate;
            loanCostAll = loanCostDay * time;
        }

        $('.calculator .count_1').text(numberWithSpaces(rate.toFixed(2)));
        $('.calculator .count_2').text(numberWithSpaces(loanCostDay.toFixed(0)));
        $('.calculator .count_3').text(numberWithSpaces(loanCostAll.toFixed(0)));
        $('.calculator .price_1').text(numberWithSpaces(cost.toFixed(0)));
        $('.calculator .price_2').text(numberWithSpaces(costPromo.toFixed(0)));

        $('.calculator .total_block').addClass('active');
	}

    function calcProcess() {
		$.ajax({
				type: 'POST',
				url: ajax_var.url,
				dataType: 'json',
				data: "action=get_gold_price",
				beforeSend: () => {
					ajaxgo = true;
				},
				success: (data) => {
					if (data.success && data.data) {
						callback(data.data.cost);
					} else {
						callback();
					}
					ajaxgo = false;
				},
				error: () => {
					callback();
					ajaxgo = false;
				}
			});
    }
});
