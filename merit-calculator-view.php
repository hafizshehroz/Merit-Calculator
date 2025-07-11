<?php
$pluginPath = plugin_dir_url(__FILE__);

?>
<script>
    var homeownerRequired = true;
    var firstSubmitRequiredV2 = true;
</script>
<div class="col-12 col-sm-11 col-md-12 col-lg-12 col-xl-12 text-center p-0">
    <div class="card px-0 pt-1 pb-0 mt-1 mb-2">
        <form id="edenmaimon-form">
            <ul id="progressbar">
                <li class="active" id="circle1">Step 1</li>
                <li id="circle2">Step 2</li>
                <li id="circle3">Step 3</li>
                <li id="circle4">Step 4</li>
                <li id="circle5">Step 5</li>
            </ul>
            <fieldset id="step1">
                <!-- <h3 class="title-step">Calculadora de Puntos/Méritos</h3> -->
                <div class="title-step"><span>Calculadora de Puntos/Méritos</span></div>
                    <div class="sub-title">Selecciona la comunidad para conocer los méritos que se valorarán:</div>
                <div class="calc-pts-section">
                    <div class="calc-pts-card">
                        <div class="calc-pts-card-sec">
                            <div class="pts-card-sec-info">
                                <div class="img">
                                    <img src="https://calculadoradelopositor.com/wp-content/uploads/2025/07/andalucia.png" alt="">
                                    <label for="">Aragón:</label>
                                </div>
                            </div>
                        </div>
                        <div class="calc-pts-card-sec">
                            <div class="pts-card-sec-info">
                                <img src="https://calculadoradelopositor.com/wp-content/uploads/2025/07/aragon.png" alt="">
                            </div>
                        </div>
                        <div class="calc-pts-card-sec">
                            <div class="pts-card-sec-info">
                                <img src="https://calculadoradelopositor.com/wp-content/uploads/2025/07/asturias.png" alt="">
                            </div>
                        </div>
                        <div class="calc-pts-card-sec">
                            <div class="pts-card-sec-info">
                                <img src="https://calculadoradelopositor.com/wp-content/uploads/2025/07/baleares.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="calc-pts-card">
                        <div class="calc-pts-card-sec">
                            <div class="pts-card-sec-info">
                                <img src="https://calculadoradelopositor.com/wp-content/uploads/2025/07/canarias.png" alt="">
                            </div>
                        </div>
                        <div class="calc-pts-card-sec">
                            <div class="pts-card-sec-info">
                                <img src="https://calculadoradelopositor.com/wp-content/uploads/2025/07/cantabria.png" alt="">
                            </div>
                        </div>
                            <div class="calc-pts-card-sec">
                            <div class="pts-card-sec-info">
                                <img src="https://calculadoradelopositor.com/wp-content/uploads/2025/07/CastillayLeon.png" alt="">
                            </div>
                        </div>
                        <div class="calc-pts-card-sec">
                            <div class="pts-card-sec-info">
                                <img src="https://calculadoradelopositor.com/wp-content/uploads/2025/07/Castilla_LaMancha.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="calc-pts-card">
                        <div class="calc-pts-card-sec">
                            <div class="pts-card-sec-info">
                                <img src="https://calculadoradelopositor.com/wp-content/uploads/2025/07/Catalunya.png" alt="">
                            </div>
                        </div>
                        <div class="calc-pts-card-sec">
                            <div class="pts-card-sec-info">
                                <img src="https://calculadoradelopositor.com/wp-content/uploads/2025/07/Comunidad_Valenciana.png" alt="">
                            </div>
                        </div>
                            <div class="calc-pts-card-sec">
                            <div class="pts-card-sec-info">
                                <img src="https://calculadoradelopositor.com/wp-content/uploads/2025/07/extremadura.png" alt="">
                            </div>
                        </div>
                        <div class="calc-pts-card-sec">
                            <div class="pts-card-sec-info">
                                <img src="https://calculadoradelopositor.com/wp-content/uploads/2025/07/galicia.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="calc-pts-card">
                        <div class="calc-pts-card-sec">
                            <div class="pts-card-sec-info">
                                <img src="https://calculadoradelopositor.com/wp-content/uploads/2025/07/madrid.png" alt="">
                            </div>
                        </div>
                        <div class="calc-pts-card-sec">
                            <div class="pts-card-sec-info">
                                <img src="https://calculadoradelopositor.com/wp-content/uploads/2025/07/murcia.png" alt="">
                            </div>
                        </div>
                            <div class="calc-pts-card-sec">
                            <div class="pts-card-sec-info">
                                <img src="https://calculadoradelopositor.com/wp-content/uploads/2025/07/navarra.png" alt="">
                            </div>
                        </div>
                        <div class="calc-pts-card-sec">
                            <div class="pts-card-sec-info">
                                <img src="https://calculadoradelopositor.com/wp-content/uploads/2025/07/Pais_Vasco.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="calc-pts-card">
                        
                        <div class="calc-pts-card-sec">
                            <div class="pts-card-sec-info">
                                <img src="https://calculadoradelopositor.com/wp-content/uploads/2025/07/LaRioja.png" alt="">
                            </div>
                        </div>
                        <div class="calc-pts-card-sec">
                            <div class="pts-card-sec-info">
                                <img src="https://calculadoradelopositor.com/wp-content/uploads/2025/07/Ceuta_Melilla.gif" alt="">
                            </div>
                        </div>
                    </div>
                     
                </div>



                    <!-- <div class="field-container">
                        <label class="fieldlabels">Property price</label>
                        <input type="text" id="propertyPrice" name="property" class="calc-input" placeholder="Property price" inputmode="numeric" value="2000000">
                        <div class="valid_talk_user" id="property_valid"></div>
                    </div>
                    <div class="field-container">
                        <label class="fieldlabels">The purpose of the mortgage loan</label>
                        <select id="mortgageLoan" name="mortgageLoan" tabindex="-1" class="calc-input">
                            <option value="First Property">First Property</option>
                            <option value="Second Property">Second Property</option>
                            <option value="Loan Consolidation" selected>Loan Consolidation</option>
                            <option value="Mortgage Recycle">Mortgage Recycle</option>
                            <option value="Reverse Mortgage">Reverse Mortgage</option>
                            <option value="Another Purpose">Another Purpose</option>
                        </select>
                    </div> -->
                 
                <div class="results">
                    <!-- <div class="resSection">
                        <label for="label-res" class="label-res">You can request up to</label>
                        <div class="result"><span class="res" id="requestUp"></span></div>
                    </div> -->
                </div>
                <input type="button" name="next" id="btn-step1" class="next action-button" value="Volver">
            </fieldset>
            <fieldset id="step2">
                <!-- <h3 class="title-step">Calculadora de Puntos/Méritos Madrid</h3>
                <p>Selecciona la comunidad para conocer los méritos que se valorarán:</p> -->
                <div class="title-step"><span>Calculadora de Puntos/Méritos Madrid</span></div>
                    <div class="sub-title">Selecciona la comunidad para conocer los méritos que se valorarán:</div>
                <div class="form-card-section">
                    <div class="field-container">
                        <label class="fieldlabels">Especialidad:</label>
                        <select id="maritalStatus" name="maritalStatus" tabindex="-1" class="calc-input">
                            <option value="Single">Single</option>
                            <option value="In a relationship without children">In a relationship without children</option>
                            <option value="In a relationship children">In a relationship children</option>
                            <option value="Divorcee">Divorcee</option>
                            <option value="Single Parent">Single Parent</option>
                        </select>

                    </div>
                      <div class="field-container">
                        <label class="fieldlabels">Provincia:</label>
                        <select id="creditIssues" name="creditIssues" tabindex="-1" class="calc-input">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                        </select>
                    </div>
                    
                    <div class="title-step"><span>PUNTUACION TOTAL</span></div>
                    <div class="sub-title">(Máximo 10 puntos)</div>

                    <div class="calc-pts-section">
                        <div class="calc-pts-card">
                            <div class="calc-pts-card-sec">
                                <div class="pts-card-sec-info">
                                    1.1 Experiencia docente en especialidades del Cuerpo de Maestros, en centros públicos
                                </div>
                            </div>
                            <div class="calc-pts-card-sec">
                                    <div class="pts-card-sec-box">
                                        <div class="pts-card-sec-inner">
                                            <label for="">Años</label>
                                            <input type="number" name="" id="">
                                        </div>
                                    </div>
                                    <div class="pts-card-sec-box">
                                        <div class="pts-card-sec-inner">
                                            <label for="">Meses</label>
                                            <input type="number" name="" id="">
                                        </div>
                                    </div>
                                </div>
                                <div class="calc-pts-card-sec">
                                    <div class="pts-card-sec-box">
                                        0,700 ptos/año
                                    </div>
                                    <div class="pts-card-sec-box">
                                        
                                    0,0583 ptos/mes
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="calc-pts-section">
                        <div class="calc-pts-card">
                            <div class="calc-pts-card-sec">
                                <div class="pts-card-sec-info">
                                    1.2 Experiencia docente en especialidades en distintos Cuerpos al que opta elaspirante, en centros públicos
                                </div>
                            </div>
                            <div class="calc-pts-card-sec">
                                    <div class="pts-card-sec-box">
                                        <div class="pts-card-sec-inner">
                                            <label for="">Años</label>
                                            <input type="number" name="" id="">
                                        </div>
                                    </div>
                                    <div class="pts-card-sec-box">
                                        <div class="pts-card-sec-inner">
                                            <label for="">Meses</label>
                                            <input type="number" name="" id="">
                                        </div>
                                    </div>
                                </div>
                                <div class="calc-pts-card-sec">
                                    <div class="pts-card-sec-box">
                                        0,700 ptos/año
                                    </div>
                                    <div class="pts-card-sec-box">
                                        
                                    0,0583 ptos/mes
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="calc-pts-section">
                        <div class="calc-pts-card">
                            <div class="calc-pts-card-sec">
                                <div class="pts-card-sec-info">
                                    1.1 Experiencia docente en especialidades del Cuerpo de Maestros, en centros públicos
                                </div>
                            </div>
                            <div class="calc-pts-card-sec">
                                    <div class="pts-card-sec-box">
                                        <div class="pts-card-sec-inner">
                                            <label for="">Años</label>
                                            <input type="number" name="" id="">
                                        </div>
                                    </div>
                                    <div class="pts-card-sec-box">
                                        <div class="pts-card-sec-inner">
                                            <label for="">Meses</label>
                                            <input type="number" name="" id="">
                                        </div>
                                    </div>
                                </div>
                                <div class="calc-pts-card-sec">
                                    <div class="pts-card-sec-box">
                                        0,700 ptos/año
                                    </div>
                                    <div class="pts-card-sec-box">
                                        
                                    0,0583 ptos/mes
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="calc-pts-section">
                        <div class="calc-pts-card">
                            <div class="calc-pts-card-sec">
                                <div class="pts-card-sec-info">
                                    1.2 Experiencia docente en especialidades en distintos Cuerpos al que opta elaspirante, en centros públicos
                                </div>
                            </div>
                            <div class="calc-pts-card-sec">
                                    <div class="pts-card-sec-box">
                                        <div class="pts-card-sec-inner">
                                            <label for="">Años</label>
                                            <input type="number" name="" id="">
                                        </div>
                                    </div>
                                    <div class="pts-card-sec-box">
                                        <div class="pts-card-sec-inner">
                                            <label for="">Meses</label>
                                            <input type="number" name="" id="">
                                        </div>
                                    </div>
                                </div>
                                <div class="calc-pts-card-sec">
                                    <div class="pts-card-sec-box">
                                        0,700 ptos/año
                                    </div>
                                    <div class="pts-card-sec-box">
                                        
                                    0,0583 ptos/mes
                                    </div>
                                </div>
                        </div>
                    </div>

                </div>
                <div class="results">
                    <div class="resSection">
                        <label for="label-res" class="label-res">You can return up to </label>
                        <div class="result"><span class="res" id="returnUp"></span></div>
                    </div>
                </div>
                <input type="button" name="next" id="btn-step2" class="next action-button" value="Continue calculating">
                <input type="button" name="previous" class="previous action-button-previous" value="Back">
            </fieldset>
            <fieldset id="step3">
                <!-- <h3 class="title-step">Step Title</h3>
                <div class="form-card-section">
                    
                  
                    <div class="field-container">
                        <label class="fieldlabels">What is  your square house?</label>
                        <input type="text" id="squareHouse" name="squareHouse" class="calc-input" placeholder="Square house" inputmode="numeric" value="10000">
                        <div class="valid_talk_user" id="property_valid"></div>
                    </div>
                </div> -->
                <div class="results">
                    <div class="resSection">
                        <label for="label-res" class="label-res">Building insurance</label>
                        <div class="result"><span class="res" id="buildingInsurance"></span></div>
                    </div>
                    <div class="resSection">
                        <label for="label-res" class="label-res">Price for month</label>
                        <div class="result"><span class="res" id="priceMonth"></span></div>
                    </div>
                </div>
                <input type="button" name="next" id="btn_step3" class="next action-button" value="Continue calculating">
                <input type="button" name="previous" class="previous action-button-previous" value="Back">
            </fieldset>
            <fieldset id="step4">
                <h3 class="title-step">Step Title</h3>
               
                <div class="results">
                    <div class="resSection">
                        <label for="label-res" class="label-res">Mortgage amount</label>
                        <div class="result"><span class="res" id="mortgageAmt"></span></div>
                    </div>
                    <div class="resSection anyother">
                        <label for="label-res" class="label-res">Mortgage amount other person</label>
                        <div class="result"><span class="res" id="mortgageAmtOther"></span></div>
                    </div>
                </div>
                <input type="button" name="next" id="btn_step4" class="next action-button" value="Continue calculating">
                <input type="button" name="previous" class="previous action-button-previous" value="Back">
            </fieldset>
            <fieldset id="step5">
                <h3 class="title-step">Step Title</h3>
                <div class="custom-table">
                    <div class="ct-row">
                        <div class="ct-cell">
                            <div class="ct-title">Total payments (principal and interest)</div>
                            <div class="ct-value" id="totalPay"></div>
                        </div>
                        <div class="ct-cell">
                            <div class="ct-title">Repayment for every shekel loan</div>
                            <div class="ct-value" id="shekelLoanRepay"></div>
                        </div>
                        <div class="ct-cell">
                            <div class="ct-title">Property price</div>
                            <div class="ct-value" id="propertyPriceRes"></div>
                        </div>
                        <div class="ct-cell">
                            <div class="ct-title">Monthly repayment</div>
                            <div class="ct-value" id="monthlyRepayment"></div>
                        </div>
                    </div>
                    <div class="ct-row">
                        <div class="ct-cell">
                            <div class="ct-title">The purpose of the mortgage loan</div>
                            <div class="ct-value" id="loanPurpose"></div>
                        </div>
                        <div class="ct-cell">
                            <div class="ct-title">House Insurance</div>
                            <div class="ct-value" id="houseInsurance"></div>
                        </div>
                        <div class="ct-cell">
                            <div class="ct-title">Life Insurane</div>
                            <div class="ct-value" id="lifeInsurane"></div>
                        </div>
                        <div class="ct-cell">
                            <div class="ct-title">Total</div>
                            <div class="ct-value" id="res"></div>
                        </div>
                    </div>
                </div>
                </table>
                    <div class="res-table">
                        <div class="res-table-heading">Monthly Interest</div>
                        <table>
                            <thead>
                                <th>Month</th>
                                <th>Mortgage</th>
                                <th>Payment</th>
                                <th>Interest</th>
                            </thead>
                            <tbody id="monthlyIntTable"></tbody>
                        </table>
                    </div>
                    <input type="button"  id="calculate-again" class="action-button" value="Calculate Again">
                    <input type="button" name="previous" class="previous action-button-previous" value="Back">
            </fieldset>

        </form>
    </div>
</div>



