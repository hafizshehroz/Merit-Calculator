jQuery(document).ready(async function ($) {
    Number.prototype.formatter = function(decimal){
		return this.toLocaleString('en-US',{style:'currency',currency:'USD',maximumFractionDigit:decimal});
	}
    function addCommas(nStr) {
        nStr += '';
        x = nStr.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
                x1 = x1.replace(rgx, '$1' + ',' + '$2');
        }
        return x1 + x2;
    }
    // new SlimSelect({ placeholder: '', select: "select#mortgageLoan", searchPlaceholder: '', showContent: "down", showSearch: !1, });
    new SlimSelect({ placeholder: '', select: 'select#maritalStatus', searchPlaceholder: '', showContent: "down", showSearch: !1, });
    new SlimSelect({ placeholder: '', select: 'select#creditIssues', showSearch: !1, showContent: "down", });
    // new SlimSelect({ placeholder: '', select: 'select#wh oTake', showSearch: !1, showContent: "down", });
    // new SlimSelect({ placeholder: '', select: 'select#smoke', showSearch: !1, showContent: "down", });
    // new SlimSelect({ placeholder: '', select: 'select#anyother', showSearch: !1, showContent: "down", });
    // new SlimSelect({ placeholder: '', select: 'select#whoTakeOther', showSearch: !1, showContent: "down", });
    // new SlimSelect({ placeholder: '', select: 'select#smokeOther', showSearch: !1, showContent: "down", });
    
    let current_fs, next_fs, previous_fs;
    let opacity;
    let current = 1;
    let steps = $("fieldset").length;
    setProgressBar(current);
    function nextStep(data) {
        const stepButton = data.currentTarget;
        current_fs = $(stepButton).parent();
        next_fs = $(stepButton).parent().next();
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
        next_fs.show();
        current_fs.animate(
            { opacity: 0 },
            {
                step: function (now) {
                    opacity = 1 - now;
                    current_fs.css({ display: "none", position: "relative" });
                    next_fs.css({ opacity: opacity });
                },
                duration: 500,
            }
        );
        setProgressBar(++current);
    }
    function prevStep() {
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
        previous_fs.show();
        current_fs.animate(
            { opacity: 0 },
            {
                step: function (now) {
                    opacity = 1 - now;
                    current_fs.css({ display: "none", position: "relative" });
                    previous_fs.css({ opacity: opacity });
                },
                duration: 500,
            }
        );
        setProgressBar(--current);
    }
    function setProgressBar(curStep) {
        let percent = parseFloat(100 / steps) * curStep;
        percent = percent.toFixed();
        $(".progress-bar").css("width", percent + "%");
    }
    $(".previous").on("click", prevStep);
    
    $("#btn-step1").on("click", () => {
        $(".section_hide").hide();
        $("#header_hazarnu").css("z-index", "99");
    });
    $('#calculate-again').on('click', function(){
        location.reload();
    })
    const backend = {
        "19":	{"male":{"no":0.0000608,	"yes":0.0000868}, "female":{	"no":0.0000526,	"yes":0.000069}},
        "20":	{"male":{"no":0.0000608,	"yes":0.0000868}, "female":{	"no":0.0000526,	"yes":0.000069}},
        "21":	{"male":{"no":0.0000608,	"yes":0.0000868}, "female":{	"no":0.0000526,	"yes":0.000069}},
        "22":	{"male":{"no":0.0000608,	"yes":0.0000868}, "female":{	"no":0.0000526,	"yes":0.000069}},
        "23":	{"male":{"no":0.0000608,	"yes":0.0000868}, "female":{	"no":0.0000526,	"yes":0.000069}},
        "24":	{"male":{"no":0.0000608,	"yes":0.0000868}, "female":{	"no":0.0000526,	"yes":0.0000697}},
        "25":	{"male":{"no":0.0000614,	"yes":0.0000874}, "female":{	"no":0.0000532,	"yes":0.0000697}},
        "26":	{"male":{"no":0.0000614,	"yes":0.000088},  "female":{	"no":0.0000532,	"yes":0.0000697}},
        "27":	{"male":{"no":0.0000614,	"yes":0.000088},  "female":{	"no":0.0000538,	"yes":0.0000703}},
        "28":	{"male":{"no":0.0000614,	"yes":0.000088},  "female":{	"no":0.0000538,	"yes":0.0000703}},
        "29":	{"male":{"no":0.0000614,	"yes":0.000088},  "female":{	"no":0.0000538,	"yes":0.0000709}},
        "30":	{"male":{"no":0.0000614,	"yes":0.0000881}, "female":{	"no":0.0000538,	"yes":0.0000713}},
        "31":	{"male":{"no":0.0000614,	"yes":0.0000881}, "female":{	"no":0.0000538,	"yes":0.0000725}},
        "32":	{"male":{"no":0.0000625,	"yes":0.0000906}, "female":{	"no":0.000055,	"yes":0.0000744}},
        "33":	{"male":{"no":0.0000644,	"yes":0.0000938}, "female":{	"no":0.0000556,	"yes":0.0000769}},
        "34":	{"male":{"no":0.0000663,	"yes":0.0000975}, "female":{	"no":0.0000581,	"yes":0.00008}},
        "35":	{"male":{"no":0.0000688,	"yes":0.0001025}, "female":{	"no":0.00006,	"yes":0.0000831}},
        "36":	{"male":{"no":0.0000722,	"yes":0.0001079}, "female":{	"no":0.0000623,	"yes":0.000087}},
        "37":	{"male":{"no":0.0000759,	"yes":0.0001166}, "female":{	"no":0.0000654,	"yes":0.0000944}},
        "38":	{"male":{"no":0.0000808,	"yes":0.0001252}, "female":{	"no":0.0000685,	"yes":0.0001005}},
        "39":	{"male":{"no":0.0000876,	"yes":0.0001369}, "female":{	"no":0.0000728,	"yes":0.0001085}},
        "40":	{"male":{"no":0.0000937,	"yes":0.0001499}, "female":{	"no":0.0000771,	"yes":0.0001184}},
        "41":	{"male":{"no":0.0001024,	"yes":0.000164},  "female":{	"no":0.0000826,	"yes":0.0001295}},
        "42":	{"male":{"no":0.0001122,	"yes":0.0001825}, "female":{	"no":0.0000888,	"yes":0.0001425}},
        "43":	{"male":{"no":0.0001221,	"yes":0.0002017}, "female":{	"no":0.0000968,	"yes":0.0001554}},
        "44":	{"male":{"no":0.0001344,	"yes":0.0002251}, "female":{	"no":0.0001048,	"yes":0.0001714}},
        "45":	{"male":{"no":0.0001486,	"yes":0.0002516}, "female":{	"no":0.0001104,	"yes":0.0001893}},
        "46":	{"male":{"no":0.0001602,	"yes":0.0002724}, "female":{	"no":0.000117,	"yes":0.000201}},
        "47":	{"male":{"no":0.0001782,	"yes":0.0003036}, "female":{	"no":0.0001278,	"yes":0.000222}},
        "48":	{"male":{"no":0.000198,	    "yes":0.0003414}, "female":{	"no":0.0001386,	"yes":0.000246}},
        "49":	{"male":{"no":0.0002214,	"yes":0.000381},  "female":{	"no":0.000153,	"yes":0.000276}},
        "50":	{"male":{"no":0.0002448,	"yes":0.0004266}, "female":{	"no":0.0001674,	"yes":0.0003072}},
        "51":	{"male":{"no":0.0002718,	"yes":0.0004758}, "female":{	"no":0.0001836,	"yes":0.0003396}},
        "52":	{"male":{"no":0.0002898,	"yes":0.0005127}, "female":{	"no":0.0001937,	"yes":0.0003657}},
        "53":	{"male":{"no":0.0002898,	"yes":0.0005127}, "female":{	"no":0.0001937,	"yes":0.0003657}},
        "54":	{"male":{"no":0.0003208,	"yes":0.000566},  "female":{	"no":0.0002118,	"yes":0.0004066}},
        "55":	{"male":{"no":0.000351,	    "yes":0.0006237}, "female":{	"no":0.000233,	"yes":0.0004467}},
        "56":	{"male":{"no":0.0003892,	"yes":0.0006964}, "female":{	"no":0.0002579,	"yes":0.0004935}},
        "57":	{"male":{"no":0.0004319,	"yes":0.0007799}, "female":{	"no":0.0002854,	"yes":0.0005474}},
        "58":	{"male":{"no":0.0004797,	"yes":0.0008684}, "female":{	"no":0.0003149,	"yes":0.00061}},
        "59":	{"male":{"no":0.0005337,	"yes":0.000963},  "female":{	"no":0.0003449,	"yes":0.0006756}},
        "60":	{"male":{"no":0.0005916,	"yes":0.0010673}, "female":{	"no":0.0003815,	"yes":0.0007514}},
        "61":	{"male":{"no":0.0006251,	"yes":0.0011379}, "female":{	"no":0.0004068,	"yes":0.0008019}},
        "62":	{"male":{"no":0.0006969,	"yes":0.0012629}, "female":{	"no":0.0004483,	"yes":0.0008854}},
        "63":	{"male":{"no":0.0007711,	"yes":0.0013997}, "female":{	"no":0.0004947,	"yes":0.0009816}},
        "64":	{"male":{"no":0.0008527,	"yes":0.0015496}, "female":{	"no":0.0005431,	"yes":0.0010881}},
        "65":	{"male":{"no":0.0009352,	"yes":0.0017196}, "female":{	"no":0.0006017,	"yes":0.0012043}},
        "66":	{"male":{"no":0.0010398,	"yes":0.0018988}, "female":{	"no":0.0006642,	"yes":0.0013308}},
        "67":	{"male":{"no":0.0011535,	"yes":0.0021049}, "female":{	"no":0.0007365,	"yes":0.0014783}},
        "68":	{"male":{"no":0.0012703,	"yes":0.0023344}, "female":{	"no":0.0008131,	"yes":0.0016287}},
        "69":	{"male":{"no":0.001406,	    "yes":0.0025752}, "female":{	"no":0.0008937,	"yes":0.001805}},
        "70":	{"male":{"no":0.0015633,	"yes":0.0028365}, "female":{	"no":0.000987,	"yes":0.0019833}},

    }
    
    $('#anyother').on('change', function(){
        if(this.value=='Yes'){
            $('.anyother').fadeIn();
        }else{
            $('.anyother').fadeOut();
        }
    }).trigger('change')
    
    const validBtn1 = $("#validBtn1");
    $("#btn-step1").on("click", (data) => {
        nextStep(data);
    });
    $("#btn-step2").on("click", (data) => {
        nextStep(data);
    });
    
    $("#btn_step3").on("click", (data) => {
        nextStep(data);
    });

    function calculate(){
        let propertyPrice = +$("#propertyPrice").val().replace(/,/g,'');
        let mortgageLoan = $("#mortgageLoan").find(":selected").val();
        let requestUp = (mortgageLoan=="First Property"?propertyPrice*0.75:(mortgageLoan=="Second Property"?propertyPrice*0.7:(mortgageLoan=="Loan Consolidation"?propertyPrice*0.75:(mortgageLoan=="Mortgage Recycle"?propertyPrice*0.5:(mortgageLoan=="Reverse Mortgage"?propertyPrice*0.5:(mortgageLoan=="Another Purpose"?propertyPrice*0.7:0))))));
        $('#requestUp').html('₪ '+addCommas(requestUp.toFixed(2)));
        
        
        let mortgageAmount = +$("#mortgageAmount").val().replace(/,/g,'');
        let maritalStatus = $("#maritalStatus").find(":selected").val();
        let householdIncome = +$("#householdIncome").val().replace(/,/g,'');
        let revenue = +$("#revenue").val().replace(/,/g,'');
        let payingOff = +$("#payingOff").val().replace(/,/g,'');
        let monthlyRepay = +$("#monthlyRepay").val().replace(/,/g,'');
        let returnUp = ((householdIncome+revenue-payingOff)*(33.3333/100));
        $('#returnUp').html('₪ '+addCommas(returnUp.toFixed(2)));

        let creditIssues = $("#creditIssues").find(":selected").val();
        let squareHouse = +$("#squareHouse").val().replace(/,/g,'');
        
        let buildingInsurance = squareHouse*6000;
        let priceMonth = squareHouse*0.6;
        $('#buildingInsurance').html('₪ '+addCommas(buildingInsurance.toFixed(2)));
        $('#priceMonth').html('₪ '+addCommas(priceMonth.toFixed(2)));

        let whoTake = $("#whoTake").find(":selected").val();
        let age = +$("#age").val().replace(/,/g,'');
        let smoke = $("#smoke").find(":selected").val();

        let mortgageAmt = mortgageAmount*(backend[age][whoTake][smoke]);
        
        let anyother = $("#anyother").find(":selected").val();
        let whoTakeOther = $("#whoTakeOther").find(":selected").val();
        let ageOther = +$("#ageOther").val().replace(/,/g,'');
        let smokeOther = $("#smokeOther").find(":selected").val();
        let mortgageAmtOther = anyother=='Yes'?mortgageAmount*(backend[ageOther][whoTakeOther][smokeOther]):0;
        $('#mortgageAmt').html('₪ '+addCommas(mortgageAmt.toFixed(2)));
        $('#mortgageAmtOther').html('₪ '+addCommas(mortgageAmtOther.toFixed(2)));
        
        
        var arr = [];
		var monthlyIntTable = document.getElementById('monthlyIntTable');
        var a1 = 0;
        var a2 = 0;
        var months = 0;
        var interest = 0;
		monthlyIntTable.innerHTML = '';
		for(let i=0;i<365;i++){
			// console.log(i)
				a1 = i==0?mortgageAmount:a1+a2-monthlyRepay;
                a2 = (a1*(
                    (Math.ceil(((mortgageAmount/monthlyRepay)/12))>=26?0.00308333333333333:
                    (Math.ceil(((mortgageAmount/monthlyRepay)/12))>=21?0.00283333333333333:
                    (Math.ceil(((mortgageAmount/monthlyRepay)/12))>=16?0.0025:
                    (Math.ceil(((mortgageAmount/monthlyRepay)/12))>0?0.00225:0))))
                    +(mortgageLoan=="Another Purpose"?0.00125:0)));

			// arr.push([a2,a1,a3,a4,a5,a6,a7,a8,a9])
            interest += a2;
            if(a1<0){
                months = i;
                break
            }

			row = document.createElement('tr');

			td = document.createElement('td')
			td.innerHTML = i+1;
			row.appendChild(td);
	
			td = document.createElement('td')
			td.innerHTML = a1.formatter(2)
			row.appendChild(td);

            td = document.createElement('td')
			td.innerHTML = monthlyRepay.formatter(2)
			row.appendChild(td);
		
			td = document.createElement('td');
			td.innerHTML = a2.formatter(2)
			row.appendChild(td);
		
			monthlyIntTable.appendChild(row);
			
		}

        var year = Math.ceil(months/12);
        let totalPay = (creditIssues=="Yes"?"Mortgage Expelled":(months>360?"Please Increase the Repayment":mortgageAmount+interest));
        let shekelLoanRepay = isNaN(totalPay/mortgageAmount)?"Mortgage Expelled":totalPay/mortgageAmount;
        let propertyPriceRes = (creditIssues=="Yes"?"Mortgage Expelled":propertyPrice);
        let monthlyRepayment = (creditIssues=="Yes"?"Mortgage Expelled":monthlyRepay);
        let loanPurpose = (creditIssues=="Yes"?"Mortgage Expelled":mortgageLoan);
        let houseInsurance = (creditIssues=="Yes"?"Mortgage Expelled":priceMonth);
        let lifeInsurane = (creditIssues=="Yes"?"Mortgage Expelled":(mortgageAmt+mortgageAmtOther)*(55/100));
        let res = "There will be "+months +" months! ("+ year + " Years)";


        $('#totalPay').html('₪ '+addCommas(totalPay.toFixed(2)));
        $('#shekelLoanRepay').html('₪ '+addCommas(shekelLoanRepay.toFixed(2)));
        $('#propertyPriceRes').html('₪ '+addCommas(propertyPriceRes.toFixed(2)));
        $('#monthlyRepayment').html('₪ '+addCommas(monthlyRepayment.toFixed(2)));
        $('#loanPurpose').html(addCommas(loanPurpose));
        $('#houseInsurance').html('₪ '+addCommas(houseInsurance.toFixed(2)));
        $('#lifeInsurane').html('₪ '+addCommas(lifeInsurane.toFixed(2)));
        $('#res').html(addCommas(res));

        return {propertyPrice,
            mortgageLoan,
            requestUp,
            mortgageAmount,
            maritalStatus,
            householdIncome,
            revenue,
            payingOff,
            monthlyRepay,
            returnUp,
            creditIssues,
            squareHouse,
            buildingInsurance,
            priceMonth,
            whoTake,
            age,
            smoke,
            mortgageAmt,
            anyother,
            whoTakeOther,
            ageOther,
            smokeOther,
            mortgageAmtOther,
        }
    }
   $('.calc-input').on('change', function(){
    calculate();
   }).trigger('change')
   
    $("#btn_step4").on("click", (data) => {
       nextStep(data);
       let {propertyPrice,
        mortgageLoan,
        requestUp,
        mortgageAmount,
        maritalStatus,
        householdIncome,
        revenue,
        payingOff,
        monthlyRepay,
        returnUp,
        creditIssues,
        squareHouse,
        buildingInsurance,
        priceMonth,
        whoTake,
        age,
        smoke,
        mortgageAmt,
        anyother,
        whoTakeOther,
        ageOther,
        smokeOther,
        mortgageAmtOther,
    } = calculate();
      
        formData = `PROPERTY_PRICE=${propertyPrice}&MORTGAGE_LOAN=${mortgageLoan}&REQUEST_UP=${requestUp}&REQUESTED_MORTGAGE=${mortgageAmount}&MARITAL_STATUS=${maritalStatus}&HOUSEHOLD_INCOME=${householdIncome}&REVENUE=${revenue}&PAYING_OFF=${payingOff}&MONTHLY_REPAYMENT=${monthlyRepay}&RETURN_UP=${returnUp}&CREDIT_ISSUES=${creditIssues}&SQUARE_HOUSE=${squareHouse}&BUILDING_INSURANCE=${buildingInsurance}&PRICE_MONTH=${priceMonth}&WHO_TAKE=${whoTake}&AGE=${age}&SMOKE=${smoke}&MORTGAGE_AMOUNT=${mortgageAmt}&ANYOTHER=${anyother}&WHO_TAKE_OTHER=${whoTakeOther}&AGE_OTHER=${ageOther}&SMOKE_OTHER=${smokeOther}&MORTGAGE_AMOUNT_OTHER=${mortgageAmtOther}`;
        $.ajax({
            url: "https://script.google.com/macros/s/AKfycbxxVbFhCjHGhldBXhB4JydZ26rfiWcAcq_NJTNxyJWOoV3EeUgFK4g1KMhzouUw67mE/exec",
            type: "POST",
            // headers: {zz
            //     // 'Content-Type': 'text/plain;charset=utf-8',
            //     // 'Access-Control-Allow-Origin': 'origin-list',
            // },
            data: formData,
            success: function(data){
                console.log(data);
                // $('.loader-container').css({display:'none'});
                // $('#hidden-action').click();
            }
        });

    });
    const dataLayer = window.dataLayer || [];
    dataLayer.push({ event: "step1" });
    $("#btn-step1").on("click", () => {
        dataLayer.push({ event: "step2" });
    });
    $("#btn-step2").on("click", () => {
        dataLayer.push({ event: "step3" });
    });
    $("#btn_step3").on("click", () => {
        dataLayer.push({ event: "step4" });
    });
    $("#btn_step4").on("click", () => {
        dataLayer.push({ event: "step5" });
    });
    $("#btn_step5").on("click", () => {
        dataLayer.push({ event: "step6" });
    });
});
