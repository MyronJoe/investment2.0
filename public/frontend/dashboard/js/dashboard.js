var deposit = 0
var reflink = ''

$.ajax({
    url: '/getUser',
    data: {},
    contentType: false,
    method: 'GET',
    success: function(req, res, data){
        setData(data)
    },
    error: function(err){
        alert(err.responseJSON.data)
    }
})

$.ajax({
    url: '/userInvestment',
    data: {},
    contentType: false,
    method: 'GET',
    success: function(req, res, data){
        setUserInvestmentPlan(data.responseJSON.data)
    },
    error: function(err){
        console.log(err.responseJSON.data)
    }
})

$.ajax({
    url: '/recentInvestments',
    data: {},
    contentType: false,
    method: 'GET',
    success: function(req, res, data){
        setUpInvestmentTable(data)
    },
    error: function(err){
        alert(err.responseJSON.data)
    }
})

$.ajax({
    url: '/recentWithdrawal',
    data: {},
    contentType: false,
    method: 'GET',
    success: function(req, res, data){
        setUpWithdrawalTable(data)
        setUpPendingHistroyTable(data)
    },
    error: function(err){
        alert(err.responseJSON.data)
    }
})

$.ajax({
    url: '/getActiveInvestmentPlan',
    data: {},
    contentType: false,
    method: 'GET',
    success: function(req, res, data){
        setActiveInvestmentTable(data)
        withdrawalData(data)
    },
    error: function(err){
        alert(err.responseJSON.data)
    }
})

function setData(data){
    var response = data.responseJSON
    reflink = window.location.host +'/register?code=' + response.referralCode


    $('#fullname').html(response.fullName)
    $('#bio').html(response.bio)
    $('#email').html(response.emailAddress)
    $('#pone').html(response.phone)
    $('#notification').html('Welcome to MidasTouchExchange. We are the world leading stock exchange platform. With 24/7 customer care services')
    $('#ref_link').html(window.location.host +'/register?code=' + response.referralCode)
    $('#ref_link').prop('href', window.location.host +'/register?code=' + response.referralCode)
    $('#first-name').val(response.fullName.split(" ")[0])
    $('#last-name').val(response.fullName.split(" ")[1])
    $('#phone-edit').val(response.phone)
    $('#bio-edit').val(response.bio)
    $('#bal').html("$" + response.balance)
    $('#deposit').html("$" + response.deposit)
    $('#earning').html("$" + response.earning)
    $('#withdrawal').html("$" + response.withdrawal)

    if(response.address == ""){
        $('#address').html('None Provided')
    } else {
        $('#address').html(response.address)
    }
    if(response.phone == ""){
        $('#phone').html('None Provided')
    } else {
        $('#phone').html(response.phone)
    }
    if(response.gender == ""){
        $('#gender').html('None Provided')
    } else {
        $('#gender').html(response.gender)
    }
    if(response.bankName == ""){
        $('#bank-name').html('None Provided')
    } else {
        $('#bank-name').html(response.bankName)
    }
    if(response.accountName == ""){
        $('#account-name').html('None Provided')
    } else {
        $('#account-name').html(response.accountName)
    }
    if(response.accountNumber == ""){
        $('#account-number').html('None Provided')
    } else {
        $('#account-number').html(response.accountNumber)
    }
    if(response.btcWallet == ""){
        $('#btc_user').val('None Provided')
    } else {
        $('#btc_user').val(response.btcWallet)
    }
    if(response.etherumWallet == ""){
        $('#eth_user').val('None Provided')
    } else {
        $('#eth_user').val(response.etherumWallet)
    }
    if(response.usdt == ""){
        $('#usdt_user').val('None Provided')
    } else {
        $('#usdt_user').val(response.usdt)
    }
    if(response.bnbWallet == ""){
        $('#bnb-wallet').html('None Provided')
    } else {
        $('#bnb-wallet').html(response.bnbWallet)
    } 
    if(response.country == ""){
        $('#country').html('None Provided')
    } else {
        $('#country').html(response.country)
    } 
}

function withdrawalData(data){
    var response = data.responseJSON.result
    $('#plan').html(response.investmentPlan + ' Plan')
    $('#invested-amount').html('$' + response.investmentAmount)
    $('#intrest-amount').html('$' + response.btcBalance)
    $('#date').html(response.investedDate)
}

function setUserInvestmentPlan(data){
    if(typeof $('#bal').html() !== 'undefined'){
        var balance = parseInt($('#bal').html().toString().split('$')[1])
        $('#bal').html('$' + (parseInt(data.earning) + balance))
        $('#earning').html("$" + data.earning)
        $('#withdrawal').html("$" + data.earning)
    }
}

function setUpInvestmentTable(data){
    if(data.responseJSON.result.length != 0){
        $("#empty_state").html("")
        data.responseJSON.result.map((element, index) => {
            $("#recent_investment").append(
                "<tr>"+
                "<td class=\"cell\" >" + (index + 1) + "</td>" + 
                "<td class=\"cell\">" + element.data.action.toUpperCase() + "</td>" + 
                "<td class=\"cell\">" + element.data.plan.toUpperCase() + "</td>" + 
                "<td class=\"cell\">" + element.data.amount + "</td>" +
                "<td class=\"cell\">" + element.data.coinType.toUpperCase() + "</td>" +
                // "<td class=\"cell\">" + (element.data.status.toUpperCase() == 'true' ? 'Active' : 'Not Active') + "</td>" + 
                "<td class=\"cell\">" + element.data.createdAt + "</td>" +
                "</tr>"
                );
        });
    }
}

function setUpWithdrawalTable(data){
    console.log(data.responseJSON);
    if(data.responseJSON.result.length != 0){
        $("#empty_withdrawal_state").html("")
        data.responseJSON.result.map((element, index) => {
            $("#recent-withdrawal").append(
                "<tr>"+
                "<td class=\"cell\">" + (index + 1) + "</td>" + 
                "<td class=\"cell\">" + element.data.action + "</td>" + 
                "<td class=\"cell\">" + element.data.amount + "</td>" +
                "<td class=\"cell\">" + element.data.calculatedAmount + "</td>" + 
                "<td class=\"cell\">" + element.data.status + "</td>" + 
                "<td class=\"cell\">" + element.data.coinType.toUpperCase() + "</td>" +
                "<td class=\"cell\">" + element.data.settlementStatus + "</td>" +
                "<td class=\"cell\">" + element.data.createdAt + "</td>" +
                "</tr>"
                );
        });
    }
}

function setUpPendingHistroyTable(data){
    console.log(data.responseJSON);
    if(data.responseJSON.result.length != 0){
        $("#empty_pending_state").html("")
        data.responseJSON.result.map((element, index) => {
            $("#pending-histroy-table").append(
                "<tr>"+
                "<td class=\"cell\">" + (index + 1) + "</td>" + 
                "<td class=\"cell\">" + element.data.action + "</td>" + 
                "<td class=\"cell\">" + element.data.amount + "</td>" +
                "<td class=\"cell\">" + element.data.calculatedAmount + "</td>" + 
                "<td class=\"cell\">" + element.data.status + "</td>" + 
                "<td class=\"cell\">" + element.data.coinType.toUpperCase() + "</td>" +
                "<td class=\"cell\">" + element.data.settlementStatus + "</td>" +
                "<td class=\"cell\">" + element.data.createdAt + "</td>" +
                "</tr>"
                );
        });
    }
}

function setUpConfirmedHistroyTable(data){
    console.log(data.responseJSON);
    if(data.responseJSON.result.length != 0){
        $("#empty_state_confirmed").html("")
        data.responseJSON.result.map((element, index) => {
            $("#confirmed-table-histroy").append(
                "<tr>"+
                "<td class=\"cell\">" + (index + 1) + "</td>" + 
                "<td class=\"cell\">" + element.data.action + "</td>" + 
                "<td class=\"cell\">" + element.data.amount + "</td>" +
                "<td class=\"cell\">" + element.data.calculatedAmount + "</td>" + 
                "<td class=\"cell\">" + element.data.status + "</td>" + 
                "<td class=\"cell\">" + element.data.coinType.toUpperCase() + "</td>" +
                "<td class=\"cell\">" + element.data.settlementStatus + "</td>" +
                "<td class=\"cell\">" + element.data.createdAt + "</td>" +
                "</tr>"
                );
        });
    }
}

function setActiveInvestmentTable(data){
    var response = data.responseJSON.result
    if(response.investmentStatus == true){
        $('#empty_reinvest_state').html('')
        $("#investment-plan-table").append(
            "<tr>"+
            "<td class=\"cell\">" + "1" + "</td>" + 
            "<td class=\"cell\">" + "<button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#planUpgrade\">Upgrade</button>" + "</td>" +
            "<td class=\"cell\">" + "<button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#withdrawalModal\">Withdraw</button>" + "</td>" +
            "<td class=\"cell\">" + response.investmentPlan + "</td>" +
            "<td class=\"cell\">" + response.investmentAmount + "</td>" + 
            "<td class=\"cell\">" + response.btcBalance + "</td>" + 
            "<td class=\"cell\">" + 'BTC' + "</td>" + 
            "<td class=\"cell\">" + response.investedDate + "</td>" +
            "</tr>"
        );
    }
}

function copy(){
   if(reflink != ''){
    navigator.clipboard.writeText(reflink).then(() => {
        alert("Text copied to clipboard")
    })
   }
}

$('#logout-modal').submit(function (e){
    e.preventDefault()
    $.ajax({
        url: '/signOut',
        data: {},
        contentType: false,
        method: 'POST',
        success: function(req, res, data){
            document.location = '/login'
        },
        error: function(err){
            alert(err.responseJSON.data)
        }
    })
})

$('#user-basic-info-form').submit(function (e){
    e.preventDefault()
        $.ajax({
            url: '/updateUserBasicInfo',
            data: {
                fullName: $('#first-name').val() + ' ' + $('#last-name').val(),
                phone: $('#phone-edit').val(),
                bio: $('#bio-edit').val(),
            },
            contentType: false,
            method: 'POST',
            contentType: 'application/x-www-form-urlencoded',
            success: function(req, res, data){
                document.location = '/dash-board'
            },
            error: function(err){
                alert(err.responseJSON.data)
            }
        })
})

$('#account-settings-form').submit(function (e){
    e.preventDefault()
    var bankName = $('#bank-name').val()
    var accountName = $('#account-name').val()
    var accountNumber = $('#account-number').val()
    var btcWallet = $('#btc_user').val()
    var ethWallet = $('#eth_user').val()
    var usdtWallet = $('#usdt_user').val()
    if(bankName == ""){
        bankName = "None Provided"
    }
    if(accountName == ""){
        accountName = "None Provided"
    }
    if(accountNumber == ""){
        accountNumber = "None Provided"
    }
    if(btcWallet == ""){
        btcWallet = "None Provided"
    }
    if(ethWallet == ""){
        ethWallet = "None Provided"
    }
    if(usdtWallet == ""){
        usdtWallet = "None Provided"
    }
        $.ajax({
            url: '/updateUserAccountInfo',
            data: {
                bankName: bankName,
                accountName: accountName,
                accountNumber: accountNumber, 
                btcWallet: btcWallet,
                ethWallet: ethWallet,
                usdtWallet: usdtWallet
            },
            contentType: false,
            method: 'POST',
            contentType: 'application/x-www-form-urlencoded',
            success: function(req, res, data){
                document.location = '/dash-board'
            },
            error: function(err){
                alert(err.responseJSON.data)
            }
    })
})

$('#security-form').submit(function (e){
    e.preventDefault()
    if($('#new-password').val() == $('#confirm-password').val()){
        $.ajax({
            url: '/updateUserSecurity',
            data: {
                currentPassword: $('#current-password').val(),
                newPassword:  $('#current-password').val()
            },
            contentType: false,
            method: 'POST',
            contentType: 'application/x-www-form-urlencoded',
            success: function(req, res, data){
                document.location = '/dash-board'
            },
            error: function(err){
                alert(err.responseJSON.data)
            }
        })
    } else {
        alert('Passwords Does not match')
    }
})

$('#password-reset').submit(function (e){
    e.preventDefault()
        $.ajax({
            url: '/resetPassword',
            data: {
                email: $('#email-reset').val(),
            },
            contentType: false,
            method: 'POST',
            contentType: 'application/x-www-form-urlencoded',
            success: function(req, res, data){
                document.location = '/login'
            },
            error: function(err){
                alert(err.responseJSON.data)
            }
        })
})

$('#support-form').submit(function (e){
    e.preventDefault()
        $.ajax({
            url: '/contact-us',
            data: {
                name: $('#name').val(),
                email: $('#email').val(),
                message: $('#message').val(),
            },
            contentType: false,
            method: 'POST',
            contentType: 'application/x-www-form-urlencoded',
            success: function(req, res, data){
                alert("Your support have been recorded successfully. we will get back to you")
                document.location = '/dash-board'
            },
            error: function(err){
                alert(err.responseJSON.data)
            }
        })
})