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
                <h3 class="title-step">Step Title</h3>
                <div class="form-card-section">
                    <div class="field-container">
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
                    </div>
                    
                </div>
                <div class="results">
                    <div class="resSection">
                        <label for="label-res" class="label-res">You can request up to</label>
                        <div class="result"><span class="res" id="requestUp"></span></div>
                    </div>
                </div>
                <input type="button" name="next" id="btn-step1" class="next action-button" value="Volver">
            </fieldset>
            <fieldset id="step2">
                <h3 class="title-step">Step Title</h3>
                <div class="form-card-section">
                   
                    <div class="field-container">
                        <label class="fieldlabels">Requested Mortgage amount</label>
                        <input type="text" id="mortgageAmount" name="property" class="calc-input" placeholder="Mortgage amount" inputmode="numeric" value="500000">
                        <div class="valid_talk_user" id="property_valid"></div>
                    </div>
                    <div class="field-container">
                        <label class="fieldlabels">Marital Status</label>
                        <select id="maritalStatus" name="maritalStatus" tabindex="-1" class="calc-input">
                            <option value="Single">Single</option>
                            <option value="In a relationship without children">In a relationship without children</option>
                            <option value="In a relationship children">In a relationship children</option>
                            <option value="Divorcee">Divorcee</option>
                            <option value="Single Parent">Single Parent</option>
                        </select>
                    </div>
                    <div class="field-container">
                        <label class="fieldlabels">Net household income</label>
                        <input type="text" id="householdIncome" name="householdIncome" class="calc-input" placeholder="household income" inputmode="numeric" value="100000">
                        <div class="valid_talk_user" id="property_valid"></div>
                    </div>
                    <div class="field-container">
                        <label class="fieldlabels">Additional loans you are currently paying off?</label>
                        <input type="text" id="payingOff" name="payingOff" class="calc-input" placeholder="Additional loans" inputmode="numeric" value="100000">
                        <div class="valid_talk_user" id="property_valid"></div>
                    </div>
                    <div class="field-container">
                        <label class="fieldlabels">Is there additional revenue?</label>
                        <input type="text" id="revenue" name="revenue" class="calc-input" placeholder="Additional revenue" inputmode="numeric" value="100000">
                        <div class="valid_talk_user" id="property_valid"></div>
                    </div>
                    <div class="field-container">
                        <label class="fieldlabels">Is the monthly repayment desirable</label>
                        <input type="text" id="monthlyRepay" name="property" class="calc-input" placeholder="Monthly repayment" inputmode="numeric" value="10000">
                        <div class="valid_talk_user" id="property_valid"></div>
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
                <h3 class="title-step">Step Title</h3>
                <div class="form-card-section">
                    
                    <div class="field-container">
                        <label class="fieldlabels">Do you have any credit issues?</label>
                        <select id="creditIssues" name="creditIssues" tabindex="-1" class="calc-input">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                        </select>
                    </div>
                    <div class="field-container">
                        <label class="fieldlabels">What is  your square house?</label>
                        <input type="text" id="squareHouse" name="squareHouse" class="calc-input" placeholder="Square house" inputmode="numeric" value="10000">
                        <div class="valid_talk_user" id="property_valid"></div>
                    </div>
                </div>
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
                <div class="form-card-section">
                    
                    <div class="field-container">
                        <label class="fieldlabels">Who take the mortgage?</label>
                        <select id="whoTake" name="whoTake" tabindex="-1" class="calc-input">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="none">None</option>
                        </select>
                    </div>
                    <div class="field-container">
                        <label class="fieldlabels">What is your age?</label>
                        <input type="text" id="age" name="age" class="calc-input" placeholder="Age" inputmode="numeric" value="35">
                        <div class="valid_talk_user" id="property_valid"></div>
                    </div>
                    <div class="field-container">
                        <label class="fieldlabels">Do you smoke ?</label>
                        <select id="smoke" name="smoke" tabindex="-1" class="calc-input">
                            <option value="no">No</option>
                            <option value="yes">Yes</option>
                        </select>
                    </div>
                    <div class="field-container">
                        <label class="fieldlabels">Anyother one take the mortgage?</label>
                        <select id="anyother" name="anyother" tabindex="-1" class="calc-input" >
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                        </select>
                    </div>
                    <div class="field-container anyother">
                        <label class="fieldlabels">Who take the mortgage?</label>
                        <select id="whoTakeOther" name="whoTakeOther" tabindex="-1" class="calc-input" >
                            <option value="male">Male</option>
                            <option value="female" selected>Female</option>
                            <option value="none">None</option>
                        </select>
                    </div>
                    <div class="field-container anyother">
                        <label class="fieldlabels">What is your age?</label>
                        <input type="text" id="ageOther" name="ageOther" class="calc-input" placeholder="Age Other Person" inputmode="numeric" value="19">
                        <div class="valid_talk_user" id="property_valid"></div>
                    </div>
                    <div class="field-container anyother">
                        <label class="fieldlabels">Do you smoke ?</label>
                        <select id="smokeOther" name="smokeOther" tabindex="-1" class="calc-input" >
                            <option value="no">No</option>
                            <option value="yes" selected>Yes</option>
                        </select>
                    </div>
                </div>
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



