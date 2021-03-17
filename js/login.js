let btn_yellow = document.getElementsByClassName("btn_yellow")[0];
btn_yellow.addEventListener("click", function() {
  alert("eeee");
  var isPhone = /^09[0-9]{8}$/;
  var isgmail = /^([A-Za-z0-9_\-\.])+\@(gmail.com)$/;
  var ispwd = /^\d{4}$/;

  let account = document.getElementsByClassName('registered_ID')[0].value;
  let pwd = document.getElementsByClassName('registered_pwd')[0].value;
  let name = document.getElementsByClassName('username')[0].value;
  let address = document.getElementsByClassName('address')[0].value;
  let phone = document.getElementsByClassName('phone')[0].value;
  if (name == '') {
    alert("請填寫[名子]");
    return false;
  } else if (!isgmail.test(account)) {
    alert("帳號格式錯誤");
    return false;
  } else if (!ispwd.test(pwd)) {
    alert("密碼格式錯誤");
    return false;
  } else if (address == '') {
    alert("請填寫[地址]");
    return false;
  } else if (!isPhone.test(phone)) {
    alert("電話格式錯誤");
    return false;
  }



  // var isPhone = /^([0-9]{3,4}-)?[0-9]{7,8}$/;
  // var reg2 = /^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,10}$/;
  // let phone = document.getElementsByClassName('phone')[0].value;
  // let phone = document.getElementsByClassName('phone')[0].value;
  // // alert(phone);
  // let pwd = document.getElementsByClassName("registered_pwd").value.trim();
  // let pwd_span = document.getElementsByClassName("regis_span_pwd")[0];
  // let phone_span = document.getElementsByClassName("regis_span_cellphone")[0];

  // alert(isPhone.test(phone));
  // if (!isPhone.test(phone)) {
  //     // alert('aaaa');
  //     // alert('手機號碼輸入有誤！');
  //     // phoneTxt.style.color = "red";
  //     // phone_span.classList.add("-on");
  //     alert("電話格式錯誤");
  //     return false;
  // }
  // if (!reg2.test(pwd)) {
  //     // alert('手機號碼輸入有誤！');
  //     // phoneTxt.style.color = "red";
  //     // pwd_span.classList.add("-on");
  //     alert("密碼格式錯誤");
  //     return false;
  // }
});