<?php
/**
 * Plugin Name:     Self Build Cost Calculator
 * Description:     Estimate your project costs instantly with Build It's interactive self build cost calculator. Find out how much it will cost to build your house, including total building costs and a price per square metre
 * Version:         1.0.0
 * Author:          Wyarej Ali
 * Author URI:      https://wyarejali.vercel.app
 * License:         GPL2
 */

 // Define the shortcode function
 function self_build_cost_calculator_shortcode() {
    return '<div class="tpl-calculator">
    <!-- Progress bar -->
    <section class="progress-bar__section" id="top-of-page">
       <div id="progress-bar__outer">
          <div class="row">
             <div
                class="progress-bar__container col-md-8 col-md-offset-2"
                >
                <div id="container">
                   
                </div>
             </div>
          </div>
       </div>
    </section>
    <!----- Page 1 ----->
    <section class="page1" data-page="1" data-bar="0.2">
       <div>
          <div class="row">
             <div
                class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2"
                >
                <form class="form-1">
                   <div class="progress-bar__wrapper">
                      <h3 class="step-header">
                         Step 1 of 5 - Your Self-Build Project
                      </h3>
                   </div>
                   <ul class="form-fields">
                      <li
                         class="form-fields__item"
                         id="form-field__1-1"
                         >
                         <p class="form-fields__desc">
                            For general build cost advice check
                            out our
                            <a
                               href="https://www.self-build.co.uk/which-building-route"
                               >beginner’s guide to self-build
                            costs</a
                               >, or get a detailed estimate for
                            your project by using our in-depth
                            Build Cost Calculator:
                         </p>
                      </li>
                      <li
                         class="form-fields__item"
                         id="form-field__1-2"
                         >
                         <label class="form-fields__label">
                            Total internal floor space of
                            conventional storeys (in square
                            metres)
                            <span class="form-fields__required"
                               >*</span
                               >
                            <div class="tooltip">
                               <div class="tooltip__image">
                                  <img
                                     src="https://buildingsolutionsireland.com/wp-content/uploads/2023/12/question-mark.svg"
                                     />
                               </div>
                               <div
                                  class="tooltip__content"
                                  id="first-tooltip"
                                  >
                                  <p class="title">
                                     House Size Help
                                  </p>
                                  <p>
                                     Self-building gives you
                                     the power to specify
                                     your own internal
                                     floorplan, but as a
                                     guide here are some
                                     typical house sizes:
                                  </p>
                                  <ul>
                                     <li>
                                        Two-bed bungalow
                                        90m2
                                     </li>
                                     <li>
                                        Three-bed house
                                        160m2
                                     </li>
                                     <li>
                                        Four-bed house 200m
                                     </li>
                                     <li>
                                        Five-bed house 250m2
                                     </li>
                                  </ul>
                               </div>
                            </div>
                         </label>
                         <div
                            class="form-fields__input-container"
                            >
                            <input
                               data-field_type="input"
                               class="form-fields__input"
                               id="input-1"
                               type="number"
                               required=""
                               data-meta_value="h_total_internal_floor_space"
                               />
                         </div>
                         <p class="error-message__text">
                            This field is required. You may have
                            encountered this error because you
                            tried to enter a value less than 1,
                            or because you did not complete this
                            field.
                         </p>
                      </li>
                      <li
                         class="form-fields__item"
                         id="form-field__1-3"
                         >
                         <label class="form-fields__label">
                         Will there be a habitable loft?
                         <span class="form-fields__required"
                            >*</span
                            >
                         </label>
                         <div
                            class="form-fields__select-container"
                            >
                            <select
                               data-field_type="select"
                               class="form-fields__select"
                               id="form-fields__select-1"
                               required=""
                               data-meta_value="h_will_there_be_loft"
                               >
                               <option
                                  class="form-fields__option"
                                  value=""
                                  selected="selected"
                                  >
                                  Please Select
                               </option>
                               <option
                                  class="form-fields__option"
                                  value="No"
                                  >
                                  No
                               </option>
                               <option
                                  class="form-fields__option"
                                  value="Yes"
                                  >
                                  Yes
                               </option>
                            </select>
                         </div>
                         <p class="error-message__text">
                            This field is required. You may have
                            encountered this error because you
                            tried to enter a value less than 1,
                            or because you did not complete this
                            field.
                         </p>
                      </li>
                      <div
                         class="hidden-section"
                         id="hidden-section__1"
                         >
                         <li
                            class="form-fields__item"
                            id="form-field__1-4"
                            >
                            <label class="form-fields__label">
                            What will the internal
                            floorspace of your loft be (in
                            square metres)?
                            <span
                               class="form-fields__required"
                               >*</span
                               >
                            </label>
                            <p class="field-description">
                               A typical loft will offer around
                               60% of the floorspace of a
                               standard storey
                            </p>
                            <div
                               class="form-fields__input-container"
                               >
                               <input
                                  data-field_type="input"
                                  class="form-fields__input"
                                  id="input-2"
                                  type="number"
                                  data-meta_value="h_total_internal_loft_space"
                                  value=""
                                  />
                            </div>
                            <p class="error-message__text">
                               This field is required. You may
                               have encountered this error
                               because you tried to enter a
                               value less than 1, or because
                               you did not complete this field.
                            </p>
                         </li>
                      </div>
                      <li
                         class="form-fields__item"
                         id="form-field__1-5"
                         >
                         <label class="form-fields__label">
                         Location of project
                         <span class="form-fields__required"
                            >*</span
                            >
                         </label>
                         <div
                            class="form-fields__select-container"
                            >
                            <select
                               data-field_type="select"
                               class="form-fields__select"
                               id="form-fields__select-2"
                               required=""
                               data-meta_value="h_project_location"
                               value="North East"
                               >
                               <option
                                  class="form-fields__option"
                                  value=""
                                  selected="selected"
                                  >
                                  Please Select
                               </option>
                               <option
                                  class="form-fields__option"
                                  value="1.05"
                                  >
                                  East Anglia
                               </option>
                               <option
                                  class="form-fields__option"
                                  value="1.15"
                                  >
                                  Greater London
                               </option>
                               <option
                                  class="form-fields__option"
                                  value="1.00"
                                  >
                                  Midlands
                               </option>
                               <option
                                  class="form-fields__option"
                                  value="0.95"
                                  >
                                  North East
                               </option>
                               <option
                                  class="form-fields__option"
                                  value="1.00"
                                  >
                                  North West
                               </option>
                               <option
                                  class="form-fields__option"
                                  value="1.00"
                                  >
                                  Scotland
                               </option>
                               <option
                                  class="form-fields__option"
                                  value="1.05"
                                  >
                                  South
                               </option>
                               <option
                                  class="form-fields__option"
                                  value="1.10"
                                  >
                                  South East
                               </option>
                               <option
                                  class="form-fields__option"
                                  value="1.00"
                                  >
                                  South West
                               </option>
                               <option
                                  class="form-fields__option"
                                  value="0.95"
                                  >
                                  Wales
                               </option>
                               <option
                                  class="form-fields__option"
                                  value="1.00"
                                  >
                                  Rest of UK / Unknown
                               </option>
                            </select>
                         </div>
                         <p class="error-message__text">
                            This field is required. You may have
                            encountered this error because you
                            tried to enter a value less than 1,
                            or because you did not complete this
                            field.
                         </p>
                      </li>
                      <!--
                         <button type="button" class="submit btn btn-primary">
                             Get Result
                         </button>
                         -->
                      <!--
                         <li class="form-fields__item" id="">
                             <label class="form-fields__label">
                                 Total Internal Area
                             </label>
                             <div class="form-fields__input-container">
                                 <input name="" class="form-fields__input" id="result" value="0" readonly>
                             </div>
                         </li>
                         -->
                   </ul>
                </form>
                <a href="#top-of-page"
                   ><button
                   type="button"
                   class="next-btn btn btn-success"
                   id="first-page-next-btn"
                   >
                Next
                </button></a
                   >
                <a href="#top-of-page"
                   ><button
                   type="button"
                   class="results-btn btn btn-success"
                   style="display: none"
                   >
                Back to Results
                </button></a
                   >
             </div>
          </div>
       </div>
    </section>
    <!----- Page 2 ----->
    <section class="page2" data-page="2" data-bar="0.4">
       <div>
          <div class="row">
             <div
                class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2"
                >
                <form class="form-1">
                   <div class="progress-bar__wrapper">
                      <h3 class="step-header">
                         Step 2 of 5 - Materials &amp; Design
                         Choices
                      </h3>
                      <div class="progress-bar"></div>
                   </div>
                   <ul class="form-fields">
                      <li class="form-fields__item">
                         <label class="form-fields__label">
                         What structural system will you be
                         using?
                         <span class="form-fields__required"
                            >*</span
                            >
                         </label>
                         <p class="field-description">
                            The structural system is the
                            construction method that will form
                            the core shell of your home. For
                            more advice see our
                            <a
                               href="https://www.self-build.co.uk/structural-options-for-your-self-build/"
                               >
                            beginner’s guide to building
                            systems</a
                               >
                         </p>
                         <div
                            class="form-fields__select-container"
                            >
                            <select
                               data-field_type="select"
                               class="form-fields__select"
                               id="form-fields__select-3"
                               required=""
                               data-meta_value="h_structural_system"
                               >
                               <option
                                  class="form-fields__option"
                                  value=""
                                  selected="selected"
                                  >
                                  Please Select
                               </option>
                               <option
                                  class="form-fields__option"
                                  value="0.0"
                                  >
                                  Blockwork
                               </option>
                               <option
                                  class="form-fields__option"
                                  value="25"
                                  >
                                  Timber Frame
                               </option>
                               <option
                                  class="form-fields__option"
                                  value="61"
                                  >
                                  Structural Insulated Panels (SIPS)
                               </option>
                               <option
                                  class="form-fields__option"
                                  value="90"
                                  >
                                  Insulating Concrete Formwork (ICF)
                               </option>
                            </select>
                         </div>
                         <p class="error-message__text">
                            This field is required. You may have
                            encountered this error because you
                            tried to enter a value less than 1,
                            or because you did not complete this
                            field.
                         </p>
                      </li>
                      <!-- Hidden HPR section to calculate wall thickness -->
                      <li
                         class="form-fields__item hidden-section"
                         >
                         <label class="form-fields__label">
                         What structural system will you be
                         using?
                         <span class="form-fields__required"
                            >*</span
                            >
                         </label>
                         <div
                            class="form-fields__select-container"
                            >
                            <select
                               data-field_type="select"
                               class="form-fields__select"
                               id="form-fields__select-3--hidden"
                               data-meta_value="h_structural_system_hidden"
                               >
                               <option
                                  class="form-fields__option"
                                  value=""
                                  selected="selected"
                                  >
                                  Please Select
                               </option>
                               <option
                                  class="form-fields__option"
                                  value=""
                                  id="struct-system__1"
                                  >
                                  Blockwork
                               </option>
                               <option
                                  class="form-fields__option"
                                  value=""
                                  id="struct-system__2"
                                  >
                                  Timber Frame
                               </option>
                               <option
                                  class="form-fields__option"
                                  value=""
                                  id="struct-system__3"
                                  >
                                  Structural Insulated Panels
                                  (SIPS)
                               </option>
                               <option
                                  class="form-fields__option"
                                  value=""
                                  id="struct-system__4"
                                  >
                                  Insulating Concrete Formwork
                                  (ICF)
                               </option>
                            </select>
                         </div>
                      </li>
                      <!-- END Hidden HPR section to calculate wall thickness -->
                      <li class="form-fields__item">
                         <label class="form-fields__label">
                         What external wall finish will be
                         used?
                         <span class="form-fields__required"
                            >*</span
                            >
                         </label>
                         <div
                            class="form-fields__select-container"
                            >
                            <select
                               data-field_type="select"
                               class="form-fields__select"
                               id="form-fields__select-4"
                               required=""
                               data-meta_value="h_external_wall_finish"
                               >
                               <option
                                  class="form-fields__option"
                                  value=""
                                  selected="selected"
                                  >
                                  Please Select
                               </option>
                               <option
                                  class="form-fields__option"
                                  value="-19"
                                  >
                                  Standard Brick
                               </option>
                               <option
                                  class="form-fields__option"
                                  value="0.0"
                                  >
                                  Handmade Brick
                               </option>
                               <option
                                  class="form-fields__option"
                                  value="51"
                                  >
                                  Stone
                               </option>
                               <option
                                  class="form-fields__option"
                                  value="-12"
                                  >
                                  High Performance Render
                               </option>
                            </select>
                         </div>
                         <p class="error-message__text">
                            This field is required. You may have
                            encountered this error because you
                            tried to enter a value less than 1,
                            or because you did not complete this
                            field.
                         </p>
                      </li>
                      <li class="form-fields__item">
                         <label class="form-fields__label">
                         What roof covering will be used?
                         <span class="form-fields__required"
                            >*</span
                            >
                         </label>
                         <div
                            class="form-fields__select-container"
                            >
                            <select
                               data-field_type="select"
                               class="form-fields__select"
                               id="form-fields__select-5"
                               required=""
                               data-meta_value="h_roof_covering"
                               >
                               <option
                                  class="form-fields__option"
                                  value=""
                                  selected="selected"
                                  >
                                  Please Select
                               </option>
                               <option
                                  class="form-fields__option"
                                  value="0.0"
                                  >
                                  Concrete pantile
                               </option>
                               <option
                                  class="form-fields__option"
                                  value="10"
                                  >
                                  Machine-made clay tile
                               </option>
                               <option
                                  class="form-fields__option"
                                  value="67"
                                  >
                                  Handmade clay tile
                               </option>
                               <option
                                  class="form-fields__option"
                                  value="15"
                                  >
                                  Slate
                               </option>
                            </select>
                         </div>
                         <p class="error-message__text">
                            This field is required. You may have
                            encountered this error because you
                            tried to enter a value less than 1,
                            or because you did not complete this
                            field.
                         </p>
                      </li>
                      <li class="form-fields__item">
                         <label class="form-fields__label">
                         What material will be used for the
                         doors and windows?
                         <span class="form-fields__required"
                            >*</span
                            >
                         </label>
                         <div
                            class="form-fields__select-container"
                            >
                            <select
                               data-field_type="select"
                               class="form-fields__select"
                               id="form-fields__select-6"
                               required=""
                               data-meta_value="h_door_window_materials"
                               >
                               <option
                                  class="form-fields__option"
                                  value=""
                                  selected="selected"
                                  >
                                  Please Select
                               </option>
                               <option
                                  class="form-fields__option"
                                  value="0.0"
                                  >
                                  PVCu
                               </option>
                               <option
                                  class="form-fields__option"
                                  value="15"
                                  >
                                  Softwood
                               </option>
                               <option
                                  class="form-fields__option"
                                  value="40"
                                  >
                                  Oak
                               </option>
                               <option
                                  class="form-fields__option"
                                  value="40"
                                  >
                                  Aluminium
                               </option>
                            </select>
                         </div>
                         <p class="error-message__text">
                            This field is required. You may have
                            encountered this error because you
                            tried to enter a value less than 1,
                            or because you did not complete this
                            field.
                         </p>
                      </li>
                      <li class="form-fields__item">
                         <label class="form-fields__label">
                         Will your loft have dormer windows?
                         <span class="form-fields__required"
                            >*</span
                            >
                         </label>
                         <p class="field-description">
                            Dormers are special windows that jut
                            out from the main roof, creating
                            more headroom inside a loft.
                            <a
                               href="https://www.self-build.co.uk/guide-to-dormer-window-design/"
                               >
                            Find out more about dormer
                            windows</a
                               >
                         </p>
                         <div
                            class="form-fields__select-container"
                            >
                            <select
                               data-field_type="select"
                               class="form-fields__select"
                               id="form-fields__select-7"
                               required=""
                               data-meta_value="h_will_loft_have_dormer_windows"
                               >
                               <option
                                  class="form-fields__option"
                                  value=""
                                  selected="selected"
                                  >
                                  Please Select
                               </option>
                               <option
                                  class="form-fields__option"
                                  value="No"
                                  >
                                  No
                               </option>
                               <option
                                  class="form-fields__option"
                                  value="Yes"
                                  >
                                  Yes
                               </option>
                            </select>
                         </div>
                         <p class="error-message__text">
                            This field is required. You may have
                            encountered this error because you
                            tried to enter a value less than 1,
                            or because you did not complete this
                            field.
                         </p>
                      </li>
                      <div
                         class="hidden-section"
                         id="hidden-section__2"
                         style="display: block"
                         >
                         <li class="form-fields__item">
                            <label class="form-fields__label">
                            How many dormer windows will
                            there be?
                            <span
                               class="form-fields__required"
                               >*</span
                               >
                            </label>
                            <div
                               class="form-fields__input-container"
                               >
                               <input
                                  data-field_type="input"
                                  class="form-fields__input"
                                  id="input-3"
                                  data-meta_value="h_number_of_dormer_windows"
                                  value=""
                                  type="number"
                                  required=""
                                  />
                            </div>
                            <p class="error-message__text">
                               This field is required. You may
                               have encountered this error
                               because you tried to enter a
                               value less than 1, or because
                               you did not complete this field.
                            </p>
                         </li>
                         <li class="form-fields__item">
                            <label class="form-fields__label">
                            What size will your dormer
                            windows be? (please select
                            closest match)
                            <span
                               class="form-fields__required"
                               >*</span
                               >
                            </label>
                            <div
                               class="form-fields__select-container"
                               >
                               <select
                                  data-field_type="select"
                                  class="form-fields__select"
                                  id="form-fields__select-8"
                                  data-meta_value="h_size_of_dormer_windows"
                                  required=""
                                  >
                                  <option
                                     class="form-fields__option"
                                     value="0"
                                     selected="selected"
                                     >
                                     Please Select
                                  </option>
                                  <option
                                     class="form-fields__option"
                                     value="3400"
                                     >
                                     1,200mm wide windows
                                  </option>
                                  <option
                                     class="form-fields__option"
                                     value="3800"
                                     >
                                     1,800mm wide windows
                                  </option>
                               </select>
                            </div>
                            <p class="error-message__text">
                               This field is required. You may
                               have encountered this error
                               because you tried to enter a
                               value less than 1, or because
                               you did not complete this field.
                            </p>
                         </li>
                      </div>
                   </ul>
                </form>
                <a href="#top-of-page"
                   ><button
                   type="button"
                   class="back-btn btn btn-secondary"
                   >
                Previous
                </button></a
                   >
                <a href="#top-of-page"
                   ><button
                   type="button"
                   class="next-btn btn btn-success"
                   >
                Next
                </button></a
                   >
                <a href="#top-of-page"
                   ><button
                   type="button"
                   class="results-btn btn btn-success"
                   style="display: none"
                   >
                Back to Results
                </button></a
                   >
             </div>
          </div>
       </div>
    </section>
    <!----- Page 3 ----->
    <section class="page3" data-page="3" data-bar="0.6">
       <div>
          <div class="row">
             <div
                class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2"
                >
                <form class="form-1">
                   <div class="progress-bar__wrapper">
                      <h3 class="step-header">
                         Step 3 of 5 - Interior Fit-out &amp;
                         External Works
                      </h3>
                      <div class="progress-bar"></div>
                   </div>
                   <ul class="form-fields">
                      <li class="form-fields__item">
                         <label class="form-fields__label">
                         How many bathrooms will you need?
                         <span class="form-fields__required"
                            >*</span
                            >
                         </label>
                         <p class="field-description">
                            Please enter the total number of
                            bathrooms you will need. A single
                            downstairs WC has already been
                            included in the calculations.
                         </p>
                         <div
                            class="form-fields__input-container"
                            >
                            <input
                               data-field_type="input"
                               class="form-fields__input"
                               id="input-4"
                               required=""
                               data-meta_value="h_how_many_additional_bathrooms"
                               value=""
                               type="number"
                               />
                         </div>
                         <p class="error-message__text">
                            This field is required. You may have
                            encountered this error because you
                            tried to enter a value less than 1,
                            or because you did not complete this
                            field.
                         </p>
                      </li>
                      <li class="form-fields__item">
                         <label class="form-fields__label">
                            How much do you intend to spend in
                            total on sanitaryware for all your
                            bathrooms?
                            <span class="form-fields__required"
                               >*</span
                               >
                            <div class="tooltip">
                               <div class="tooltip__image">
                                  <img
                                     src="https://buildingsolutionsireland.com/wp-content/uploads/2023/12/question-mark.svg"
                                     />
                               </div>
                               <div
                                  class="tooltip__content"
                                  id="second-tooltip"
                                  >
                                  <p>
                                     Fitting-out a bathroom
                                     on a basic spec would
                                     cost around £3,000
                                  </p>
                               </div>
                            </div>
                         </label>
                         <div
                            class="form-fields__input-container"
                            >
                            <span class="currency-prepend"
                               ><input
                               data-field_type="input"
                               class="form-fields__input"
                               id="input-5"
                               required=""
                               data-meta_value="h_total_bathroom_sanitaryware_spend"
                               value=""
                               type="number"
                               /></span>
                         </div>
                         <p class="error-message__text">
                            This field is required. You may have
                            encountered this error because you
                            tried to enter a value less than 1,
                            or because you did not complete this
                            field.
                         </p>
                      </li>
                      <li class="form-fields__item">
                         <label class="form-fields__label">
                            How much do you intend to spend on
                            your kitchen?
                            <span class="form-fields__required"
                               >*</span
                               >
                            <div class="tooltip">
                               <div class="tooltip__image">
                                  <img
                                     src="https://buildingsolutionsireland.com/wp-content/uploads/2023/12/question-mark.svg"
                                     />
                               </div>
                               <div
                                  class="tooltip__content"
                                  id="third-tooltip"
                                  >
                                  <p>
                                     A basic fitted kitchen
                                     could cost as little as
                                     £5,000-£10,000 including
                                     installation, while a
                                     high-end bespoke kitchen
                                     could cost anything from
                                     £25,000 upwards
                                  </p>
                               </div>
                            </div>
                         </label>
                         <div
                            class="form-fields__input-container"
                            >
                            <span class="currency-prepend"
                               ><input
                               data-field_type="input"
                               class="form-fields__input"
                               id="input-6"
                               required=""
                               data-meta_value="h_total_kitchen_spend"
                               value=""
                               type="number"
                               /></span>
                         </div>
                         <p class="error-message__text">
                            This field is required. You may have
                            encountered this error because you
                            tried to enter a value less than 1,
                            or because you did not complete this
                            field.
                         </p>
                      </li>
                      <li class="form-fields__item">
                         <label class="form-fields__label">
                         Do you require a garage?
                         <span class="form-fields__required"
                            >*</span
                            >
                         </label>
                         <div
                            class="form-fields__select-container"
                            >
                            <select
                               data-field_type="select"
                               class="form-fields__select"
                               id="form-fields__select-9"
                               required=""
                               data-meta_value="h_do_you_require_garage"
                               >
                               <option
                                  class="form-fields__option"
                                  value=""
                                  selected="selected"
                                  >
                                  Please Select
                               </option>
                               <option
                                  class="form-fields__option"
                                  value="No"
                                  >
                                  No
                               </option>
                               <option
                                  class="form-fields__option"
                                  value="Yes"
                                  >
                                  Yes
                               </option>
                            </select>
                         </div>
                         <p class="error-message__text">
                            This field is required. You may have
                            encountered this error because you
                            tried to enter a value less than 1,
                            or because you did not complete this
                            field.
                         </p>
                      </li>
                      <div
                         class="hidden-section"
                         id="hidden-section__3"
                         style="display: block"
                         >
                         <li class="form-fields__item">
                            <label class="form-fields__label">
                            What type of garage do you
                            require?
                            <span
                               class="form-fields__required"
                               >*</span
                               >
                            </label>
                            <div
                               class="form-fields__select-container"
                               >
                               <select
                                  data-field_type="select"
                                  class="form-fields__select"
                                  id="form-fields__select-10"
                                  data-meta_value="h_what_type_of_garage"
                                  required=""
                                  >
                                  <option
                                     class="form-fields__option"
                                     value="0"
                                     selected="selected"
                                     >
                                     Please Select
                                  </option>
                                  <option
                                     class="form-fields__option"
                                     value="15288.92" 
                                     >
                                     Standalone garage –
                                     single space (Cavity
                                     Wall)
                                  </option>
                                  <option
                                     class="form-fields__option"
                                     value="13309.90"
                                     >
                                     Standalone garage –
                                     single space (Single
                                     Leaf Wall)
                                  </option>
                                  <option
                                     class="form-fields__option"
                                     value="19590.7392"
                                     >
                                     Standalone garage –
                                     double space (Cavity
                                     Wall)
                                  </option>
                                  <option
                                     class="form-fields__option"
                                     value="16603.4407"
                                     >
                                     Standalone garage –
                                     double space (Single
                                     Leaf Wall)
                                  </option>
                                  <option
                                     class="form-fields__option"
                                     value="-1284.00"
                                     >
                                     Integral garage – single
                                     space
                                  </option>
                                  <option
                                     class="form-fields__option"
                                     value="-2568.00"
                                     >
                                     Integral garage – double
                                     space
                                  </option>
                               </select>
                            </div>
                            <p class="error-message__text">
                               This field is required. You may
                               have encountered this error
                               because you tried to enter a
                               value less than 1, or because
                               you did not complete this field.
                            </p>
                         </li>
                      </div>
                      <li class="form-fields__item">
                         <label class="form-fields__label">
                            How much do you intend to spend on
                            hard and soft landscaping?
                            <span class="form-fields__required"
                               >*</span
                               >
                            <div class="tooltip">
                               <div class="tooltip__image">
                                  <img
                                     src="https://buildingsolutionsireland.com/wp-content/uploads/2023/12/question-mark.svg"
                                     />
                               </div>
                               <div
                                  class="tooltip__content"
                                  id="fourth-tooltip"
                                  >
                                  <p>
                                     This could include
                                     driveways, paths, garden
                                     walls and planting. We
                                     suggest a standard
                                     allowance of £8,000, but
                                     this could rise
                                     significantly for
                                     sloping sites or
                                     high-spec landscaping.
                                  </p>
                               </div>
                            </div>
                         </label>
                         <div
                            class="form-fields__input-container"
                            >
                            <span class="currency-prepend"
                               ><input
                               data-field_type="input"
                               class="form-fields__input"
                               id="input-7"
                               required=""
                               data-meta_value="h_total_landscaping_spend"
                               value=""
                               type="number"
                               /></span>
                         </div>
                         <p class="error-message__text">
                            This field is required. You may have
                            encountered this error because you
                            tried to enter a value less than 1,
                            or because you did not complete this
                            field.
                         </p>
                      </li>
                   </ul>
                </form>
                <a href="#top-of-page"
                   ><button
                   type="button"
                   class="back-btn btn btn-secondary"
                   >
                Previous
                </button></a
                   >
                <a href="#top-of-page"
                   ><button
                   type="button"
                   class="next-btn btn btn-success"
                   >
                Next
                </button></a
                   >
                <a href="#top-of-page"
                   ><button
                   type="button"
                   class="results-btn btn btn-success"
                   style="display: none"
                   >
                Back to Results
                </button></a
                   >
             </div>
          </div>
       </div>
    </section>
    <!----- Page 4 ----->
    <section class="page4" data-page="4" data-bar="0.6">
       <div>
          <div class="row">
             <div
                class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2"
                >
                <form class="form-1">
                   <div class="progress-bar__wrapper">
                      <h3 class="step-header">
                         Step 4 of 5 - Building Route
                      </h3>
                      <div class="progress-bar"></div>
                   </div>
                   <ul class="form-fields">
                      <li class="form-fields__item">
                         <label class="form-fields__label">
                         How do you intend to manage your
                         self-build project?
                         <span class="form-fields__required"
                            >*</span
                            >
                         </label>
                         <div
                            class="form-fields__select-container"
                            >
                            <select
                               data-field_type="select"
                               class="form-fields__select"
                               id="form-fields__select-11"
                               required=""
                               data-meta_value="h_how_do_you_intend_to_manage"
                               >
                               <option
                                  class="form-fields__option"
                                  value=""
                                  selected="selected"
                                  >
                                  Please Select
                               </option>
                               <option
                                  class="form-fields__option"
                                  value="1.25" 
                                  >
                                  I will use a turnkey design and build company
                               </option>
                               <option
                                  class="form-fields__option"
                                  value="1.25"
                                  >
                                  I will work with a main contractor
                               </option>
                               <option
                                  class="form-fields__option"
                                  value="1.15"
                                  >
                                  I will manage the subcontractors myself
                               </option>
                               <option
                                  class="form-fields__option"
                                  value="1.10"
                                  >
                                  I will undertake most of the
                                  works myself
                               </option>
                            </select>
                         </div>
                         <p class="error-message__text">
                            This field is required. You may have
                            encountered this error because you
                            tried to enter a value less than 1,
                            or because you did not complete this
                            field.
                         </p>
                      </li>
                      <li class="form-fields__item">
                         <label class="form-fields__label">
                            How complex will the architecture
                            and engineering be on your project?
                            <span class="form-fields__required"
                               >*</span
                               >
                            <div class="tooltip">
                               <div class="tooltip__image">
                                  <img
                                     src="https://buildingsolutionsireland.com/wp-content/uploads/2023/12/question-mark.svg"
                                     />
                               </div>
                               <div
                                  class="tooltip__content"
                                  id="fifth-tooltip"
                                  >
                                  <p>
                                     <span
                                        style="
                                        font-weight: 600;
                                        "
                                        >Straightforward</span
                                        >
                                     = standard square or
                                     rectangular box
                                     <br />
                                     <span
                                        style="
                                        font-weight: 600;
                                        "
                                        >Slightly
                                     unusual</span
                                        >
                                     = might feature several
                                     different roof slopes
                                     and a more complex
                                     floorplan
                                     <br />
                                     <span
                                        style="
                                        font-weight: 600;
                                        "
                                        >Highly
                                     complex</span
                                        >
                                     = likely to feature
                                     glass walls, curves,
                                     cantilevers and other
                                     bespoke elements
                                  </p>
                               </div>
                            </div>
                         </label>
                         <div
                            class="form-fields__select-container"
                            >
                            <select
                               data-field_type="select"
                               class="form-fields__select"
                               id="form-fields__select-12"
                               required=""
                               data-meta_value="h_how_complex"
                               >
                               <option
                                  class="form-fields__option"
                                  value=""
                                  selected="selected"
                                  >
                                  Please Select
                               </option>
                               <option
                                  class="form-fields__option"
                                  value="1.00"
                                  >
                                  Straight Forward
                               </option>
                               <option
                                  class="form-fields__option"
                                  value="1.10"
                                  >
                                  Slightly Unusual
                               </option>
                               <option
                                  class="form-fields__option"
                                  value="1.15"
                                  >
                                  Highly Complex/Bespoke
                               </option>
                            </select>
                         </div>
                         <p class="error-message__text">
                            This field is required. You may have
                            encountered this error because you
                            tried to enter a value less than 1,
                            or because you did not complete this
                            field.
                         </p>
                      </li>
                      <li class="form-fields__item">
                         <label class="form-fields__label">
                         What quality of fit-out will be
                         specified?
                         <span class="form-fields__required"
                            >*</span
                            >
                         </label>
                         <div
                            class="form-fields__select-container"
                            >
                            <select
                               data-field_type="select"
                               class="form-fields__select"
                               id="form-fields__select-13"
                               required=""
                               data-meta_value="h_quality_of_fit_out"
                               >
                               <option
                                  class="form-fields__option"
                                  value=""
                                  selected="selected"
                                  >
                                  Please Select
                               </option>
                               <option
                                  class="form-fields__option"
                                  value="1.00"
                                  >
                                  Standard (close to developer spec)
                               </option>
                               <option
                                  class="form-fields__option"
                                  value="1.05"
                                  >
                                  Mid-range (typical self-build spec)
                               </option>
                               <option
                                  class="form-fields__option"
                                  value="1.10"
                                  >
                                  High Range
                               </option>
                               <option
                                  class="form-fields__option"
                                  value="1.15"
                                  >
                                  Luxury
                               </option>
                            </select>
                         </div>
                         <p class="error-message__text">
                            This field is required. You may have
                            encountered this error because you
                            tried to enter a value less than 1,
                            or because you did not complete this
                            field.
                         </p>
                      </li>
                   </ul>
                </form>
                <a href="#top-of-page"
                   ><button
                   type="button"
                   class="back-btn btn btn-secondary"
                   >
                Previous
                </button></a
                   >
                <a href="#top-of-page"
                   ><button
                   type="button"
                   class="next-btn btn btn-success"
                   id="cookie-init"
                   >
                Next
                </button></a
                   >
                <a href="#top-of-page"
                   ><button
                   type="button"
                   class="results-btn btn btn-success"
                   style="display: none"
                   >
                Back to Results
                </button></a
                   >
             </div>
          </div>
       </div>
    </section>
    <!----- Register / Login Page (5) ----->
    <!----- Page 6 (Results) ----->
    <section
       class="page6"
       data-page="6"
       data-bar="1.0"
       data-got_results="No"
       >
       <div>
          <div class="row">
             <div
                class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2"
                >
                <form class="form-1">
                   <div class="progress-bar__wrapper">
                      <h3 class="step-header">
                         Step 5 of 5 - Results
                      </h3>
                      <div class="progress-bar"></div>
                   </div>
                   <ul class="form-fields">
                      <div class="header__wrap">
                         <h3 class="results-header">
                            Your Self Build Project
                         </h3>
                         <p
                            class="results-edit"
                            data-gotopage="1"
                            >
                            Edit choices
                         </p>
                      </div>
                      <li class="form-fields__item" id="">
                         <label class="form-fields__label">
                         House Type
                         </label>
                         <div
                            class="form-fields__input-container"
                            >
                            <input
                               class="form-fields__input"
                               id="result-1"
                               value="Two Storeys"
                               readonly=""
                               />
                         </div>
                      </li>
                      <li class="form-fields__item" id="">
                         <label class="form-fields__label">
                         Internal area of main storeys
                         </label>
                         <div
                            class="form-fields__input-container"
                            >
                            <input
                               class="form-fields__input"
                               id="result-2"
                               value=""
                               readonly=""
                               />
                         </div>
                      </li>
                      <li class="form-fields__item" id="">
                         <label class="form-fields__label">
                         Internal area of habitable loft
                         </label>
                         <div
                            class="form-fields__input-container"
                            >
                            <input
                               class="form-fields__input"
                               id="result-3"
                               value=""
                               readonly=""
                               />
                         </div>
                      </li>
                      <li class="form-fields__item" id="">
                         <label class="form-fields__label">
                         Location
                         </label>
                         <div
                            class="form-fields__input-container"
                            >
                            <input
                               class="form-fields__input"
                               id="result-4"
                               value=""
                               readonly=""
                               />
                         </div>
                      </li>
                      <!-- </h3> -->
                      <div class="header__wrap">
                         <h3 class="results-header">
                            Materials &amp; Design Choices
                         </h3>
                         <p
                            class="results-edit"
                            data-gotopage="2"
                            >
                            Edit choices
                         </p>
                      </div>
                      <li class="form-fields__item" id="">
                         <label class="form-fields__label">
                         Structural system
                         </label>
                         <div
                            class="form-fields__input-container"
                            >
                            <input
                               class="form-fields__input"
                               id="result-5"
                               value=""
                               readonly=""
                               />
                         </div>
                      </li>
                      <li class="form-fields__item" id="">
                         <label class="form-fields__label">
                         External wall finish
                         </label>
                         <div
                            class="form-fields__input-container"
                            >
                            <input
                               class="form-fields__input"
                               id="result-6"
                               value=""
                               readonly=""
                               />
                         </div>
                      </li>
                      <li class="form-fields__item" id="">
                         <label class="form-fields__label">
                         Roof covering
                         </label>
                         <div
                            class="form-fields__input-container"
                            >
                            <input
                               class="form-fields__input"
                               id="result-7"
                               value=""
                               readonly=""
                               />
                         </div>
                      </li>
                      <li class="form-fields__item" id="">
                         <label class="form-fields__label">
                         Door &amp; window material
                         </label>
                         <div
                            class="form-fields__input-container"
                            >
                            <input
                               class="form-fields__input"
                               id="result-8"
                               value=""
                               readonly=""
                               />
                         </div>
                      </li>
                      <li class="form-fields__item" id="">
                         <label class="form-fields__label">
                         Number of dormer windows
                         </label>
                         <div
                            class="form-fields__input-container"
                            >
                            <input
                               class="form-fields__input"
                               id="result-9"
                               value=""
                               readonly=""
                               />
                         </div>
                      </li>
                      <li class="form-fields__item" id="">
                         <label class="form-fields__label">
                         Size of dormer windows
                         </label>
                         <div
                            class="form-fields__input-container"
                            >
                            <input
                               class="form-fields__input"
                               id="result-10"
                               value=""
                               readonly=""
                               />
                         </div>
                      </li>
                      <!-- </h3> -->
                      <div class="header__wrap">
                         <h3 class="results-header">
                            Internal Fit-Out &amp; External
                            Works
                         </h3>
                         <p
                            class="results-edit"
                            data-gotopage="3"
                            >
                            Edit choices
                         </p>
                      </div>
                      <li class="form-fields__item" id="">
                         <label class="form-fields__label">
                         Number of additional bathrooms
                         </label>
                         <div
                            class="form-fields__input-container"
                            >
                            <input
                               class="form-fields__input"
                               id="result-11"
                               value=""
                               readonly=""
                               />
                         </div>
                      </li>
                      <li class="form-fields__item" id="">
                         <label class="form-fields__label">
                         Sanitaryware allocation
                         </label>
                         <div
                            class="form-fields__input-container"
                            >
                            <input
                               class="form-fields__input"
                               id="result-12"
                               value=""
                               readonly=""
                               />
                         </div>
                      </li>
                      <li class="form-fields__item" id="">
                         <label class="form-fields__label">
                         Kitchen allocation
                         </label>
                         <div
                            class="form-fields__input-container"
                            >
                            <input
                               class="form-fields__input"
                               id="result-13"
                               value=""
                               readonly=""
                               />
                         </div>
                      </li>
                      <li class="form-fields__item" id="">
                         <label class="form-fields__label">
                         Garage Type
                         </label>
                         <div
                            class="form-fields__input-container"
                            >
                            <input
                               class="form-fields__input"
                               id="result-14"
                               value=""
                               readonly=""
                               />
                         </div>
                      </li>
                      <li class="form-fields__item" id="">
                         <label class="form-fields__label">
                         Landscaping allocation
                         </label>
                         <div
                            class="form-fields__input-container"
                            >
                            <input
                               class="form-fields__input"
                               id="result-15"
                               value=""
                               readonly=""
                               />
                         </div>
                      </li>
                      <!-- </h3> -->
                      <div class="header__wrap">
                         <h3 class="results-header">
                            Building Route
                         </h3>
                         <p
                            class="results-edit"
                            data-gotopage="4"
                            >
                            Edit choices
                         </p>
                      </div>
                      <li class="form-fields__item" id="">
                         <label class="form-fields__label">
                         Project route
                         </label>
                         <div
                            class="form-fields__input-container"
                            >
                            <input
                               class="form-fields__input"
                               id="result-21"
                               value=""
                               readonly=""
                               />
                         </div>
                      </li>
                      <li class="form-fields__item" id="">
                         <label class="form-fields__label">
                         Complexity of project
                         </label>
                         <div
                            class="form-fields__input-container"
                            >
                            <input
                               class="form-fields__input"
                               id="result-16"
                               value=""
                               readonly=""
                               />
                         </div>
                      </li>
                      <li class="form-fields__item" id="">
                         <label class="form-fields__label">
                         Fit-out quality
                         </label>
                         <div
                            class="form-fields__input-container"
                            >
                            <input
                               class="form-fields__input"
                               id="result-17"
                               value=""
                               readonly=""
                               />
                         </div>
                      </li>
                      <!-- </h3> -->
                      <div class="header__wrap">
                         <h3
                            class="results-header"
                            id="last-result-header"
                            >
                            Your Project Cost
                         </h3>
                      </div>
                      <li class="form-fields__item" id="">
                         <label class="form-fields__label">
                         House build cost
                         </label>
                         <div
                            class="form-fields__input-container"
                            >
                            <input
                               class="form-fields__input"
                               id="result-20"
                               value=""
                               readonly=""
                               />
                         </div>
                      </li>
                      <li class="form-fields__item" id="">
                         <label class="form-fields__label">
                         House build cost per m2
                         </label>
                         <div
                            class="form-fields__input-container"
                            >
                            <input
                               class="form-fields__input"
                               id="result-19"
                               value=""
                               readonly=""
                               />
                         </div>
                      </li>
                      <li class="form-fields__item" id="">
                         <label class="form-fields__label">
                         Total project cost (including house,
                         garage &amp; external works)
                         </label>
                         <div
                            class="form-fields__input-container"
                            >
                            <input
                               class="form-fields__input"
                               id="result-18"
                               value=""
                               readonly=""
                               />
                         </div>
                      </li>
                      <!-- </h3> -->
                   </ul>
                </form>
                <a href="#top-of-page"
                   ><button
                   type="button"
                   class="back-btn btn btn-secondary"
                   >
                Previous
                </button></a
                   >
                <a href="#top-of-page"
                   ><button
                   type="button"
                   class="js-save-results btn btn-success"
                   >
                Save Results
                </button></a
                   >
                <p class="js-save-results__text">
                   To view your results again, please visit your
                   <a
                      href="https://www.self-build.co.uk/my-account/"
                      >account page</a
                      >
                </p>
             </div>
          </div>
       </div>
    </section>
 </div>';
 };

 // Register the shortcode
 add_shortcode('self_build_cost_calculator', 'self_build_cost_calculator_shortcode');

 // Enqueue CSS and JS files
 function shortcode_enqueue_scripts() {
    // Enqueue CSS
    wp_enqueue_style('custom-css', plugins_url('css/styles.css', __FILE__));

    // Enqueue JS
    wp_enqueue_script('jquery');
    wp_enqueue_script('custom-js', plugins_url('js/scripts.js', __FILE__));
    wp_enqueue_script('cookie', plugins_url('js/js.cookie.js', __FILE__));
    wp_enqueue_script('progress', plugins_url('js/progressbar.min.js', __FILE__));
 }

 add_action('wp_enqueue_scripts', 'shortcode_enqueue_scripts');