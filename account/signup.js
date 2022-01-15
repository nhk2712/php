document.getElementById('sgin').style.backgroundColor="lightgrey";
document.getElementById('sgin').style.color="grey";
document.getElementById('sgin').style.cursor="not-allowed";
document.getElementById('sgin').style.border="1px solid lightgrey";

//checkbox
document.getElementById('check').onchange=function(){
    if(this.checked){
        document.getElementById('sgin').style.backgroundColor="rgb(169, 13, 241)";
        document.getElementById('sgin').style.color="white";
        document.getElementById('sgin').style.cursor="pointer";
        document.getElementById('sgin').style.border="1px solid rgb(169, 13, 241)";
        document.getElementById('sgin').onmouseover = function(){
            this.style.backgroundColor="rgb(101, 6, 145)";
            this.style.border="1px solid rgb(101, 6, 145)";
        }
        document.getElementById('sgin').onmouseleave = function(){
            this.style.backgroundColor="rgb(169, 13, 241)";
            this.style.border="1px solid rgb(169, 13, 241)";
        }

        //button clicked
        document.getElementById('sgin').onclick=function(){
            if(document.getElementById('usn').value===""){
                document.getElementById('unbl').innerText="This field must not be blank!";
                document.getElementById('usn').style.borderBottom="1px solid red";
                document.getElementById('lblusn').style.color="red";
            }

            if(document.getElementById('pass').value===""){
                document.getElementById('pwbl').innerText="This field must not be blank!";
                document.getElementById('pass').style.borderBottom="1px solid red";
                document.getElementById('lblpw').style.color="red";
            }

            if(document.account.repass.value!==document.account.password.value){
                document.getElementById('rpbl').innerText="The passwords don't match!";
                document.getElementById('reps').style.borderBottom="1px solid red";
                document.getElementById('lblrpw').style.color="red";
            }

            if(document.getElementById('reps').value===""){
                document.getElementById('rpbl').innerText="This field must not be blank!";
                document.getElementById('reps').style.borderBottom="1px solid red";
                document.getElementById('lblrpw').style.color="red";
            }

            if (document.getElementById('usn').value!=="" 
            && document.getElementById('pass').value!=="" 
            && document.getElementById('reps').value!=="" 
            && document.account.repass.value===document.account.password.value) {
                document.getElementById('account').method="POST";
                document.getElementById('account').action="sgup.php";
                document.getElementById('account').submit();
            }
        }
    }

    else{
        document.getElementById('sgin').style.backgroundColor="lightgrey";
        document.getElementById('sgin').style.color="grey";
        document.getElementById('sgin').style.cursor="not-allowed";
        document.getElementById('sgin').style.border="1px solid lightgrey";
        document.getElementById('sgin').onmouseover = function(){
            this.style.backgroundColor="lightgrey";
            this.style.border="1px solid lightgrey";
        }
        document.getElementById('sgin').onmouseleave = function(){
            this.style.backgroundColor="lightgrey";
            this.style.border="1px solid lightgrey";
        }

        document.getElementById('sgin').onclick=function(){}
    }
}

//

document.getElementById('reey').style.opacity="50%";
document.getElementById('resh').style.opacity="0%";

document.getElementById('show').onchange=function(){
    if(this.checked){
        document.getElementById('pass').type="text";
        document.getElementById('eye').style.opacity="100%";
    }
    else{
        document.getElementById('pass').type="password";
        document.getElementById('eye').style.opacity="50%";
    }
}
document.getElementById('resh').onchange=function(){
    if(this.checked){
        document.getElementById('reps').type="text";
        document.getElementById('reey').style.opacity="100%";
    }
    else{
        document.getElementById('reps').type="password";
        document.getElementById('reey').style.opacity="50%";
    }
}

//username blank
document.getElementById('usn').onblur=function(){
    if(this.value===""){
        document.getElementById('unbl').innerText="This field must not be blank!";
        this.style.borderBottom="1px solid red";
        document.getElementById('lblusn').style.color="red";
    }
    else{
        this.style.borderBottom="1px solid grey";
    }
}
document.getElementById('usn').onfocus=function(){
    document.getElementById('unbl').innerText="";
    this.style.borderBottom="1px solid rgb(169, 13, 241)";
    document.getElementById('lblusn').style.color="black";
}

//password blank
document.getElementById('pass').onblur=function(){
    if(this.value===""){
        document.getElementById('pwbl').innerText="This field must not be blank!";
        this.style.borderBottom="1px solid red";
        document.getElementById('lblpw').style.color="red";
    }
    else{
        this.style.borderBottom="1px solid grey";
    }
}
document.getElementById('pass').onfocus=function(){
    document.getElementById('pwbl').innerText="";
    this.style.borderBottom="1px solid rgb(169, 13, 241)";
    document.getElementById('lblpw').style.color="black";
}

//cfpw blank
document.getElementById('reps').onblur=function(){
    if(this.value===""){
        document.getElementById('rpbl').innerText="This field must not be blank!";
        this.style.borderBottom="1px solid red";
        document.getElementById('lblrpw').style.color="red";
    }
    else{
        this.style.borderBottom="1px solid grey";
    }
}
document.getElementById('reps').onfocus=function(){
    document.getElementById('rpbl').innerText="";
    this.style.borderBottom="1px solid rgb(169, 13, 241)";
    document.getElementById('lblrpw').style.color="black";
}



//dont match
document.getElementById('reps').onblur=function(){
    if(document.account.repass.value!==document.account.password.value){
        document.getElementById('rpbl').innerText="The passwords don't match!";
        this.style.borderBottom="1px solid red";
        document.getElementById('lblrpw').style.color="red";
    }
    else{
        this.style.borderBottom="1px solid grey";
    }
}
