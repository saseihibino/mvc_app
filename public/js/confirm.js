
    window.onload = function(){
        /*各画面オブジェクト*/
        const btnSubmit = document.getElementById('btnSubmit');
        const inputName = document.getElementById('inputName');
        const inputKana = document.getElementById('inputKana');
        const inputTel = document.getElementById('inputTel');
        const inputEmail = document.getElementById('inputEmail');
        const inputBody = document.getElementById('inputBody');
        const reg = /@/;
        const regTel = /^[0-9]+$/;
        
        btnSubmit.addEventListener('click', function(event) {
            let message = [];
            /*入力値チェック*/
            if(inputName.value ==""){
                message.push("氏名を入力してください。");
            }
            if(inputName.value.length > 10){
                message.push("\n氏名は10文字以内になるよう入力してください");
            }
            if(inputKana.value ==""){
                message.push("\nフリガナを入力してください。");
            }
            if(inputKana.value.length > 10){
                message.push("\nフリガナは10文字以内になるよう入力してください");
            }
            if(inputTel.value!=="" && !regTel.test(inputTel.value)){
                message.push("\n電話番号は数字で入力してください。");
            }
            if(inputEmail.value==""){
                message.push("\nメールアドレスを入力してください。");
            }else if(!reg.test(inputEmail.value)){
                message.push("\nメールアドレスの形式が不正です、xxx@xxxの形式で入力してください。");
            }
            if(inputBody.value==""){
                message.push("\nお問い合わせ内容を入力してください。");
            }
            if(message.length > 0){
                alert(message);
                return;
            }
        });
    };
