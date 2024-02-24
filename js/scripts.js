$(document).ready(function () {
    // Animation scripts / other (not calculator)

    // tooltips

    $('label').on('mouseenter', function () {
        $(this).children('tooltip__content').css('opacity', '1');
    });

    $('label').on('mouseleave', function () {
        $(this).children('tooltip__content').css('opacity', '0');
    });

    // mobile

    $('html').on('touchstart', function () {
        $(this).children('tooltip__content').css('opacity', '0');
    });

    // if in view checker
    $.fn.isInViewport = function () {
        var elementTop = $(this).offset().top;
        var elementBottom = elementTop + $(this).outerHeight();

        var viewportTop = $(window).scrollTop();
        var viewportBottom = viewportTop + $(window).height();

        return elementBottom > viewportTop && elementTop < viewportBottom;
    };

    // progress bar

    var bar = new ProgressBar.Line(container, {
        strokeWidth: 2,
        easing: 'easeInOut',
        duration: 1000,
        color: '#f57821',
        trailColor: '#eee',
        trailWidth: 2,
        svgStyle: { width: '100%', height: '10px' },
        text: {
            style: {
                // Text color.
                // Default: same as stroke color (options.color)
                color: '#000',
                position: 'absolute',
                right: '20px',
                top: '2px',
                padding: 0,
                margin: 0,
                transform: null,
            },
            autoStyleContainer: false,
        },
        from: { color: '#FFEA82' },
        to: { color: '#ED6A5A' },
        //      step: (state, bar) => {
        //        bar.setText(Math.round(bar.value() * 100) + ' %');
        //      }
    });

    bar.animate(0.2);

    //-END- Animation scripts / other (not calculator)

    var $internal_area_of_building;
    var $internal_area_of_loft;
    var $total_internal_area;

    // Conditional li Displays

    // on change of previosu select
    $('#form-fields__select-1').change(function () {
        var $value = $(this).val();

        if ($value == 'Yes') {
            $('#hidden-section__1').slideDown(400);
            $('#hidden-section__1 input').prop('required', true);
        } else if ($value != 'Yes') {
            $('#hidden-section__1').slideUp(400);
            $('#hidden-section__1 input').prop('required', false);
            $('#hidden-section__1 input').val(0);
        }
    });

    $('#form-fields__select-7').change(function () {
        var $value = $(this).val();

        if ($value == 'Yes') {
            $('#hidden-section__2').slideDown(400);
            $('#hidden-section__2 input, #hidden-section__2 select').prop(
                'required',
                true
            );
        } else if ($value != 'Yes') {
            $('#hidden-section__2').slideUp(400);
            $('#hidden-section__2 input, #hidden-section__2 select').prop(
                'required',
                false
            );
            $('#hidden-section__2 input').val(0);
        }
    });

    $('#form-fields__select-9').change(function () {
        var $value = $(this).val();

        if ($value == 'Yes') {
            $('#hidden-section__3').slideDown(400);
            $('#hidden-section__3 select').prop('required', true);
        } else if ($value != 'Yes') {
            $('#hidden-section__3').slideUp(400);
            $('#hidden-section__3 select').prop('required', false);
            $('#hidden-section__3 option').removeAttr('selected');
            $('#hidden-section__3 option[value="0"]').attr(
                'selected',
                'selected'
            );
        }
    });

    // on document ready (for refreshing with cookies/meta)

    var $value1 = $('#form-fields__select-1').val();

    if ($value1 == 'Yes') {
        $('#hidden-section__1').slideDown(400);
        $('#hidden-section__1 input').prop('required', true);
    } else if ($value1 != 'Yes') {
        $('#hidden-section__1 input').val(0);
    }

    var $value2 = $('#form-fields__select-7').val();

    if ($value2 == 'Yes') {
        $('#hidden-section__2').slideDown(400);
        $('#hidden-section__2 input, #hidden-section__2 select').prop(
            'required',
            true
        );
    } else if ($value2 != 'Yes') {
        $('#hidden-section__2').slideUp(400);
        $('#hidden-section__2 input, #hidden-section__2 select').prop(
            'required',
            false
        );
        $('#hidden-section__2 input').val(0);
    }

    var $value3 = $('#form-fields__select-9').val();

    if ($value3 == 'Yes') {
        $('#hidden-section__3').slideDown(400);
        $('#hidden-section__3 select').prop('required', true);
    } else if ($value3 != 'Yes') {
        $('#hidden-section__3').slideUp(400);
        $('#hidden-section__3 select').prop('required', false);
        $('#hidden-section__3').find('option').removeAttr('selected');
        $('#hidden-section__3')
            .find('option[value="0"]')
            .attr('selected', 'selected');
    }

    //-END- Conditional li Displays

    // Page Display

    // test if required fields have input
    function testRequired($page) {
        var $requiredFields = true;
        //      each input field that has required attribute
        var $selectString =
            '.page' +
            $page +
            ' input[required], .page' +
            $page +
            ' select[required]';
        $($selectString).each(function () {
            // Loop thru all required inputs

            var $value = $(this).val();
            var $valueText = $(this).text();

            if ($(this).data('field_type') == 'select') {
                if ($value != '' && $value != '0') {
                    // If not empty do nothing
                    $(this).parents('li').removeClass('error-message');
                    $(this)
                        .parents('li')
                        .children('.error-message__text')
                        .css('display', 'none');
                } else {
                    $(this).parents('li').addClass('error-message');
                    $(this)
                        .parents('li')
                        .children('.error-message__text')
                        .css('display', 'block');
                    $requiredFields = false; // If one loop is empty set the is Valid flag to false
                }
            } else {
                if ($value != '' && $value > '0') {
                    // If not empty do nothing
                    $(this).parents('li').removeClass('error-message');
                    $(this)
                        .parents('li')
                        .children('.error-message__text')
                        .css('display', 'none');
                } else {
                    $(this).parents('li').addClass('error-message');
                    $(this)
                        .parents('li')
                        .children('.error-message__text')
                        .css('display', 'block');
                    $requiredFields = false; // If one loop is empty set the is Valid flag to false
                }
            }
        });
        return $requiredFields;
    }

    // next page switch
    $('.next-btn').click(function () {
        var $page = parseInt($(this).parents('section').data('page'), 10);
        var $nextpage = parseInt($page + 1, 10);

        var $barPosition = $(this).parents('section').data('bar');
        var $barPosition_updated = $barPosition + 0.2;
        var $barPosition_results = $barPosition + 0.4;

        if (testRequired($page) == true) {
            if ($page <= 3) {
                bar.animate($barPosition_updated);

                $('.page' + $page).fadeTo(400, 0, function () {
                    $('.page' + $page).css('display', 'none');

                    $('.page' + $nextpage).fadeTo(400, 1, function () {
                        $('.page' + $nextpage).css('display', 'block');
                    });
                });
            } else if ($page == 4) {
                if ($('body').hasClass('page')) {
                    bar.animate($barPosition_results);

                    $('.page' + $page).fadeTo(400, 0, function () {
                        $('.page' + $page).css('display', 'none');

                        $('.page6').fadeTo(400, 1, function () {
                            $('.page6').css('display', 'block');
                            $('.page6').data('got_results', 'Yes');
                        });
                    });
                } else {
                    bar.animate($barPosition_updated);

                    $('.page' + $page).fadeTo(400, 0, function () {
                        $('.page' + $page).css('display', 'none');

                        $('.page5').fadeTo(400, 1, function () {
                            $('.page5').css('display', 'block');
                        });
                    });
                }
            } else {
            }
        } else {
        }
    });

    // back page switch
    $('.back-btn').click(function () {
        var $page = parseInt($(this).parents('section').data('page'), 10);
        var $prevpage = parseInt($page - 1, 10);

        if ($page == 6 && $('body').hasClass('page')) {
            $('.page' + $page).fadeTo(400, 0, function () {
                $('.page' + $page).css('display', 'none');

                $('.page4').fadeTo(400, 1, function () {
                    $('.page4').css('display', 'block');
                });
            });
        } else {
            $('.page' + $page).fadeTo(400, 0, function () {
                $('.page' + $page).css('display', 'none');

                $('.page' + $prevpage).fadeTo(400, 1, function () {
                    $('.page' + $prevpage).css('display', 'block');
                });
            });
        }
    });

    //-END- Page Display

    // 'Edit this page' on results page

    $('.results-edit').click(function () {
        var $gotoPage = parseInt($(this).data('gotopage'), 10);

        $('.page6').fadeTo(400, 0, function () {
            $('.page6').css('display', 'none');

            $('.page' + $gotoPage).fadeTo(400, 1, function () {
                $('.page' + $gotoPage).css('display', 'block');
            });
        });
    });

    $('.results-btn').click(function () {
        bar.animate(1.0);

        var $page = parseInt($(this).parents('section').data('page'), 10);

        $('.page' + $page).fadeTo(400, 0, function () {
            $('.page' + $page).css('display', 'none');

            $('.page6').fadeTo(400, 1, function () {
                $('.page6').css('display', 'block');
            });
        });
    });

    //-END- 'Edit this page' on results page

    // display "back to results" button

    // set data to Yes when the results btn on click is triggered (for when the user logs in or registers via the calculator)
    $('.results-btn').on('click', function () {
        $('.page6').data('got_results', 'Yes');
    });

    //on load (for refreshing)
    if ($('.page6').data('got_results') == 'Yes') {
        $('.results-btn').css('display', 'block');
    } else {
        $('.results-btn').css('display', 'none');
    }

    // on click of any button (if user navigates pages without refreshing first)
    $('.btn, .results-edit, .results-btn').on('click', function () {
        if ($('.page6').data('got_results') == 'Yes') {
            $('.results-btn').css('display', 'block');
        } else {
            $('.results-btn').css('display', 'none');
        }
    });

    //-END- display "back to results" button

    // set selected option of hidden field to the same as the non hidden field
    $('#form-fields__select-3').change(function () {
        $('#form-fields__select-3--hidden').prop(
            'selectedIndex',
            $(this).find('option:selected').index()
        );
    });

    // Main Calculations & Variables
    $('.btn').click(function () {
        // .page1
        $internal_area_of_building = parseInt($('#input-1').val(), 10);
        $internal_area_of_loft = parseInt($('#input-2').val(), 10);

        $total_internal_area =
            $internal_area_of_building + $internal_area_of_loft || 0;

        // initial calculation

        //-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*//
        //-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*//
        const $CUMULATIVE_INFLATION_ADJUSTMENT = 1.12;
        //-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*//
        //-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*//

        var $ext_wall_length_for_200_benchmark_house = 80;
        var $approx_internal_area_of_200_benchmark_house = 175;

        var $prorata_length_of_wall_for_this_house =
            ($internal_area_of_building /
                parseInt($approx_internal_area_of_200_benchmark_house, 10)) *
                parseInt($ext_wall_length_for_200_benchmark_house, 10) || 0;

        var $internal_loft_floor_area_of_benchmark = 46.5;
        var $external_loft_floor_area_of_benchmark = 48.5;

        var $gia_equivalent_for_attic_floor_area =
            ($external_loft_floor_area_of_benchmark /
                $internal_loft_floor_area_of_benchmark) *
                $internal_area_of_loft || 0;

        // cost of materials calculated with total area of house
        var $basic_price_of_trad_brick_block_construction =
            856 * $CUMULATIVE_INFLATION_ADJUSTMENT; // per m2
        var $attic_cost_per_m2 = 450 * $CUMULATIVE_INFLATION_ADJUSTMENT; // per m2
        var $bathroom_sanitaryware_costs = parseInt($('#input-5').val(), 10);
        var $kitchen_costs = parseInt($('#input-6').val(), 10);
        var $allowance_for_external_works = parseInt($('#input-7').val(), 10);

        //    var $house_wall_construction_cost_calculation = $total_internal_area * parseInt($('#form-fields__select-3').val(), 10);
        //    var $wall_finish_cost_calculation = $total_internal_area * parseInt($('#form-fields__select-4').val(), 10);
        //    var $roof_tile_cost_calculation = $total_internal_area * parseInt($('#form-fields__select-5').val(), 10);
        //    var $door_and_window_cost_calculation = $total_internal_area * parseInt($('#form-fields__select-6').val(), 10);

        var $total_dormer_cost_calculation =
            parseInt($('#input-3').val(), 10) *
            (parseInt($('#form-fields__select-8').val(), 10) *
                $CUMULATIVE_INFLATION_ADJUSTMENT);

        // bathroom cost
        var $total_bathroom_cost_calculation = '';

        if (
            $('#input-4').val() === null ||
            $('#input-4').val() === undefined ||
            $('#input-4').val() === ''
        ) {
            $total_bathroom_cost_calculation = 0;
            $has_bathrooms = false;
        } else {
            $total_bathroom_cost_calculation =
                parseInt($('#input-4').val(), 10) *
                (5200 * $CUMULATIVE_INFLATION_ADJUSTMENT);
            $has_bathrooms = true;
        }

        //Garage cost
        var $total_garage_cost = 0;
        var $integral_wall_finish = 0;
        var $integral_roof_material = 0;

        // integral wall finish
        if ($('#form-fields__select-4').val() == '-19') {
            $integral_wall_finish = -1058.42 * $CUMULATIVE_INFLATION_ADJUSTMENT;
        }
        if ($('#form-fields__select-4').val() == '0') {
            $integral_wall_finish = 0 & $CUMULATIVE_INFLATION_ADJUSTMENT;
        }
        if ($('#form-fields__select-4').val() == '51') {
            $integral_wall_finish = 2699.86 * $CUMULATIVE_INFLATION_ADJUSTMENT;
        }
        if ($('#form-fields__select-4').val() == '-12') {
            $integral_wall_finish = -786.66 * $CUMULATIVE_INFLATION_ADJUSTMENT;
        }

        // integral roof material
        if ($('#form-fields__select-5').val() == '0') {
            $integral_roof_material = 0 * $CUMULATIVE_INFLATION_ADJUSTMENT;
        }
        if ($('#form-fields__select-5').val() == '10') {
            $integral_roof_material = 0 * $CUMULATIVE_INFLATION_ADJUSTMENT;
        }
        if ($('#form-fields__select-5').val() == '67') {
            $integral_roof_material =
                3722.13 * $CUMULATIVE_INFLATION_ADJUSTMENT;
        }
        if ($('#form-fields__select-5').val() == '15') {
            $integral_roof_material = 804.19 * $CUMULATIVE_INFLATION_ADJUSTMENT;
        }

        // final garage cost calculation
        var $integral_garage_adjustment = 0;

        if ($('#form-fields__select-10').val() == '15288.92') {
            $total_garage_cost =
                parseFloat($('#form-fields__select-10').val()) *
                    $CUMULATIVE_INFLATION_ADJUSTMENT +
                parseFloat($integral_wall_finish) +
                parseFloat($integral_roof_material);
            $integral_garage_adjustment = 0;
        }
        if ($('#form-fields__select-10').val() == '13309.90') {
            $total_garage_cost =
                parseFloat($('#form-fields__select-10').val()) *
                    $CUMULATIVE_INFLATION_ADJUSTMENT +
                parseFloat($integral_wall_finish) +
                parseFloat($integral_roof_material);
            $integral_garage_adjustment = 0;
        }
        if ($('#form-fields__select-10').val() == '19590.7392') {
            $total_garage_cost =
                parseFloat($('#form-fields__select-10').val()) *
                    $CUMULATIVE_INFLATION_ADJUSTMENT +
                parseFloat($integral_wall_finish) +
                parseFloat($integral_roof_material);
            $integral_garage_adjustment = 0;
        }
        if ($('#form-fields__select-10').val() == '16603.4407') {
            $total_garage_cost =
                parseFloat($('#form-fields__select-10').val()) *
                    $CUMULATIVE_INFLATION_ADJUSTMENT +
                parseFloat($integral_wall_finish) +
                parseFloat($integral_roof_material);
            $integral_garage_adjustment = 0;
        }
        if ($('#form-fields__select-10').val() == '-1284.00') {
            $total_garage_cost = 0;
            $integral_garage_adjustment =
                parseFloat($('#form-fields__select-10').val()) *
                $CUMULATIVE_INFLATION_ADJUSTMENT;
        }
        if ($('#form-fields__select-10').val() == '-2568.00') {
            $total_garage_cost = 0;
            $integral_garage_adjustment =
                parseFloat($('#form-fields__select-10').val()) *
                $CUMULATIVE_INFLATION_ADJUSTMENT;
        }

        // Totals

        var $total_m2_cost =
            parseInt($('#form-fields__select-3').val(), 10) *
                $CUMULATIVE_INFLATION_ADJUSTMENT +
            parseInt($('#form-fields__select-4').val(), 10) *
                $CUMULATIVE_INFLATION_ADJUSTMENT +
            parseInt($('#form-fields__select-5').val(), 10) *
                $CUMULATIVE_INFLATION_ADJUSTMENT +
            parseInt($('#form-fields__select-6').val(), 10) *
                $CUMULATIVE_INFLATION_ADJUSTMENT +
            $basic_price_of_trad_brick_block_construction;

        var $attic_cost =
            $attic_cost_per_m2 * $gia_equivalent_for_attic_floor_area;

        // HPR Conditional Section
        var $basic_house_cost = 0;

        var $wall_thickness__hpr = 0;
        var $estimated_area_of_external_walls__hpr = 0;
        var $gross_area_of_house__hpr = 0;

        var $wall_thickness__non_hpr = 0;
        var $estimated_area_of_external_walls__non_hpr = 0;
        var $gross_area_of_house__non_hpr = 0;

        //check if HPR is selected

        if ($('#form-fields__select-4').val() == '-12') {
            // if HPR is seleced, do this

            // set values of the second (hidden) structural system to it's thickness
            $('#struct-system__1').val('0.42');
            $('#struct-system__2').val('0.30');
            $('#struct-system__3').val('0.28');
            $('#struct-system__4').val('0.32');

            // store selected wall thickness in variable
            $wall_thickness = $('#form-fields__select-3--hidden').val();

            // area of external walls calculation
            $estimated_area_of_external_walls =
                $prorata_length_of_wall_for_this_house * $wall_thickness;
            $gross_area_of_house =
                $internal_area_of_building + $estimated_area_of_external_walls;
        } else {
            //if anything other than HPR is selected, do this

            // set values of the second (hidden) structural system to it's thickness
            $('#struct-system__1').val('0.37');
            $('#struct-system__2').val('0.375');
            $('#struct-system__3').val('0.40');
            $('#struct-system__4').val('0.42');

            // store wall thickness in variable
            $wall_thickness = $('#form-fields__select-3--hidden').val();

            // area of external walls calculation
            $estimated_area_of_external_walls =
                $prorata_length_of_wall_for_this_house * $wall_thickness;
            $gross_area_of_house =
                $internal_area_of_building + $estimated_area_of_external_walls;
        }

        $basic_house_cost = $gross_area_of_house * $total_m2_cost;

        var $total_cost_of_constructing_house_only =
            $basic_house_cost +
            $attic_cost +
            $total_dormer_cost_calculation +
            $integral_garage_adjustment +
            $bathroom_sanitaryware_costs +
            $total_bathroom_cost_calculation +
            $kitchen_costs;

        var $total_cost_of_constructing_house_garage_ext_works =
            $total_cost_of_constructing_house_only +
            $total_garage_cost +
            $allowance_for_external_works;

        // Factor Calculation

        var $region = $('#form-fields__select-2').val();
        var $management_of_build = $('#form-fields__select-11').val();
        var $complexity = $('#form-fields__select-12').val();
        var $fitting_out_quality = $('#form-fields__select-13').val();
        var $contingency = 1.025;

        var $total_factor =
            $region *
            $management_of_build *
            $complexity *
            $fitting_out_quality *
            $contingency;

        // FINAL CALULATION //

        var $total_factored_cost_of_house_only =
            $total_factor * $total_cost_of_constructing_house_only;
        var $total_factored_cost_of_house_garage_ext_works =
            $total_factor * $total_cost_of_constructing_house_garage_ext_works;
        var $cost_per_m2 =
            $total_factored_cost_of_house_only / $total_internal_area;

        function commaSeparateNumber(val) {
            while (/(\d+)(\d{3})/.test(val.toString())) {
                val = val.toString().replace(/(\d+)(\d{3})/, '$1' + ',' + '$2');
            }
            return val;
        }

        // FINAL CALULATION //

        console.info(
            $prorata_length_of_wall_for_this_house,
            $wall_thickness,
            $estimated_area_of_external_walls
        );

        //-END- Main Calculation & Variables

        // Results

        // Your Self-Build Project
        $('#result-2').val($internal_area_of_building + 'mÂ²');
        $('#result-3').val($internal_area_of_loft + 'mÂ²');
        $('#result-4').val(
            $.trim($('#form-fields__select-2 option:selected').text())
        );

        // Materials & Design Choices
        $('#result-5').val(
            $.trim($('#form-fields__select-3 option:selected').text())
        );
        $('#result-6').val(
            $.trim($('#form-fields__select-4 option:selected').text())
        );
        $('#result-7').val(
            $.trim($('#form-fields__select-5 option:selected').text())
        );
        $('#result-8').val(
            $.trim($('#form-fields__select-6 option:selected').text())
        );
        $('#result-9').val($('#input-3').val());
        $('#result-10').val(
            $.trim($('#form-fields__select-8 option:selected').text())
        );

        // Internal Fit-Out & External Works
        if ($has_bathrooms == true) {
            $('#result-11').val($('#input-4').val());
        } else {
            $('#result-11').val('0');
        }
        $('#result-12').val('£' + commaSeparateNumber($('#input-5').val()));
        $('#result-13').val('£' + commaSeparateNumber($('#input-6').val()));
        $('#result-14').val(
            $.trim($('#form-fields__select-10 option:selected').text())
        );
        $('#result-15').val('£' + commaSeparateNumber($('#input-7').val()));

        // Building Route
        $('#result-21').val(
            $.trim($('#form-fields__select-11 option:selected').text())
        );
        $('#result-16').val(
            $.trim($('#form-fields__select-12 option:selected').text())
        );
        $('#result-17').val(
            $.trim($('#form-fields__select-13 option:selected').text())
        );

        // Your Project Cost
        $('#result-18').val(
            '£' +
                commaSeparateNumber(
                    $total_factored_cost_of_house_garage_ext_works.toFixed(2)
                )
        );
        $('#result-19').val('£' + commaSeparateNumber($cost_per_m2.toFixed(2)));
        $('#result-20').val(
            '£' +
                commaSeparateNumber(
                    $total_factored_cost_of_house_only.toFixed(2)
                )
        );

        // if hidden fields not displayed (i.e select above is set to 'No')

        // mobile

        if (window.matchMedia('(max-width: 767px)').matches) {
            if (
                $('#form-fields__select-7').find('option:selected').text() !=
                'Yes'
            ) {
                $('#result-10').parents('li').css('display', 'none');
            } else {
                $('#result-10').parents('li').css('display', 'inline-block');
            }

            if (
                $('#form-fields__select-9').find('option:selected').text() !=
                'Yes'
            ) {
                $('#result-14').parents('li').css('display', 'none');
            } else {
                $('#result-14').parents('li').css('display', 'inline-block');
            }
        } else {
            if (
                $('#form-fields__select-7').find('option:selected').text() !=
                'Yes'
            ) {
                $('#result-10').parents('li').css('display', 'none');
            } else {
                $('#result-10').parents('li').css('display', 'inline-flex');
            }

            if (
                $('#form-fields__select-9').find('option:selected').text() !=
                'Yes'
            ) {
                $('#result-14').parents('li').css('display', 'none');
            } else {
                $('#result-14').parents('li').css('display', 'inline-flex');
            }
        }
    });

    //-END- Results
});

// save results to user
$('.js-save-results').on('click', function () {
    var $metaDataString = '';
    var dataArray = {};
    dataArray['action'] = 'twk_save_calc_meta';
    dataArray['house_type'] = 'h';

    $('input[data-meta_value], select[data-meta_value]').each(function () {
        //        $metaDataString += '&';
        //        $metaDataString += $(this).data('meta_value');
        //        $metaDataString += '=';
        var value;
        if ($(this).data('field_type') == 'select') {
            value = $.trim($(this).find('option:selected').text());
        } else {
            value = $(this).val();
        }

        dataArray[$(this).data('meta_value')] = value;
    });

    //    console.info(dataArray);

    $.ajax({
        url: postajax.ajax_url,
        type: 'POST',
        beforeSend: function (request) {
            request.setRequestHeader('Authorization', 'Negotiate');
        },
        //        data: "action=twk_save_calc_meta" + $metaDataString,
        data: dataArray,
        success: function (html) {
            console.info('ajax_success');
            $('.js-save-results.btn').css('background-color', '#5cb85c');
            $('.js-save-results.btn').text('Results Saved');
            $('.js-save-results__text').css('opacity', '1');
            $('body').addClass('results-saved-true');
        },
        error: function (error) {
            console.info(error);
        },
    });
    return false;
});

// create cookies for non-logged in users, so their data is saved when they login/register (reload page)

$('.btn').on('click', function () {
    // when any btn clicked

    $('input[data-meta_value], select[data-meta_value]').each(function () {
        if ($(this).data('field_type') == 'select') {
            Cookies.set(
                $(this).data('meta_value'),
                $.trim($(this).find('option:selected').text())
            ); // create a cookie whose value is the text of the selected option i.e. 'Greater London'
        } else {
            Cookies.set($(this).data('meta_value'), $(this).val()); // create a cookie with the value of the input field's value
        }
    });
});

$(document).ready(function () {
    if (
        ($('body').hasClass('page') &&
            window.location.href.indexOf('?loggedin=true') > -1) ||
        !$('body').hasClass('page')
    ) {
        var $cookieToInput = '';
        $('input[data-meta_value], select[data-meta_value]').each(function () {
            $cookieToInput = Cookies.get($(this).data('meta_value')); // value/text of the cookie

            if ($(this).data('field_type') == 'select') {
                if ($cookieToInput == undefined) {
                } else {
                    //                    $(this).find('option:eq(0)').removeAttr('selected');
                    $(this)
                        .find('option:not(:contains(' + $cookieToInput + '))')
                        .removeAttr('selected');
                }
                $(this)
                    .find('option:contains(' + $cookieToInput + ')')
                    .attr('selected', 'selected');
            } else {
                $(this).val($cookieToInput); // set the value of $this input field to the value saved by the cookie
            }
        });

        //display hidden sections if the previous select field's selected option has a value/text of "Yes"
        var $hiddenParentOptionSelected1 = $('#form-fields__select-1')
            .find('option:selected')
            .val();
        var $hiddenParentOptionSelected2 = $('#form-fields__select-7')
            .find('option:selected')
            .val();
        var $hiddenParentOptionSelected3 = $('#form-fields__select-9')
            .find('option:selected')
            .val();

        if ($hiddenParentOptionSelected1 == 'Yes') {
            $('#hidden-section__1').css('display', 'block');
        } else {
            $('#hidden-section__1').css('display', 'none');
        }

        if ($hiddenParentOptionSelected2 == 'Yes') {
            $('#hidden-section__2').css('display', 'block');
        } else {
            $('#hidden-section__2').css('display', 'none');
        }

        if ($hiddenParentOptionSelected3 == 'Yes') {
            $('#hidden-section__3').css('display', 'block');
        } else {
            $('#hidden-section__3').css('display', 'none');
        }

        // Register & Login btn redirect
    } else {
    }
});

// on page load, check if user has registered (not if already logged in) and display results page if true

$(document).ready(function () {
    if (window.location.href.indexOf('/?loggedin=true') > -1) {
        //        console.info('Just logged in');

        $('.results-btn').trigger('click');
    } else {
        //        console.info('Not just logged in');
    }
});

// if register fails, take user back to register page
$(document).ready(function () {
    if ($('.progress-bar__section').hasClass('test-class')) {
        $('section').css('display', 'none');
        $('section').css('opacity', '0');
        $('.page5').css('display', 'block');
        $('.page5').css('opacity', '1');
    } else {
    }
});

// reset button styling & text on .btn click (to reset saved button styling)

$(document).ready(function () {
    $('.btn').on('click', function () {
        if ($('body').hasClass('results-saved-true')) {
            $('.js-save-results.btn').css('background-color', '#02B3F1');
            $('.js-save-results.btn:hover').css('background-color', '#028dbe');
            $('.js-save-results.btn').text('Save Results');
        } else {
        }
    });

    // number of bathroom default to 0
    $('.btn').on('click', function () {
        if (
            $('#input-4').val() == null ||
            $('#input-4').val() == '0' ||
            $('#input-4').val() == undefined
        ) {
            $('#input-4').val('0');
        }
    });
});
