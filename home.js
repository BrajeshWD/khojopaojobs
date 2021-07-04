function validate(){
    var uname=document.getElementById("uname");
    var pwd=document.getElementById("pwd");
    if(uname.value.trim()==""){
        uname.style.border="solid 3px red";
        document.getElementById("lbluser").style.visibility="visible";
        return false;
         }
         if(pwd.value.trim()==""){
        pwd.style.border="solid 3px red";
         document.getElementById("lblpwd").style.visibility="visible";
       
    return false;
         }
        }
        function validating(){
            var uname=document.getElementById("username");
            var pwd=document.getElementById("password");
            var cpwd=document.getElementById("cpassword");
            var dob=document.getElementById("dob");
            var male=document.getElementById("male");
            var female=document.getElementById("female");
            var eid=document.getElementById("Email_Id");
            var mob=document.getElementById("Mobile_No");
            var kyskl=document.getElementById("Key_Skills");
            var exp=document.getElementById("exp");
            if(uname.value.trim()=="")
            {
                uname.style.border="3px solid red";
                document.getElementById("lblusername").style.visibility="visible";
               return false;
            }
            if(pwd.value.trim()=="")
            {
                pwd.style.border="3px solid red";
                document.getElementById("lblpassword").style.visibility="visible";
                return false;
            }
            if(cpwd.value.trim()=="")
            {
                cpwd.style.border="3px solid red";
                document.getElementById("lblcpassword").style.visibility="visible";
                return false;
            }
            if(pwd.value!=cpwd.value){
                document.getElementById("lblcpassword").innerHTML="password and confirm password are not same";
                cpwd.style.border="3px solid red";
                document.getElementById("lblcpassword").style.visibility="visible";
                return false;
            }
            if(mob.value.trim()=="")
            { 
                mob.style.border="3px solid red";
                document.getElementById("lblmobile").style.visibility="visible";
                return false;
            }
var regx=/^[7-9]\d{9}$/;
            if(!regx.test(mob.value))
            { 
                document.getElementById("lblmobile1").style.visibility="visible";
                return false;
            }
            if(eid.value.trim()=="")
            {
                eid.style.border="3px solid red";
                document.getElementById("lbleid").style.visibility="visible";
                return false;
            }
         
var regx=/^([a-zA-z\d\.-_]+)@([a-zA-z\d-]+).([a-z]{2,8})(.[a-z]{2,8})$/;
            if(!regx.test(eid.value))
            { document.getElementById("lbleid").innerHTML="Invalid email-id.";
                eid.style.border="3px solid red";
                document.getElementById("lbleid").style.visibility="visible";
                return false;
            }
         
            if(kyskl.value.trim()=="")
            {
                kyskl.style.border="3px solid red";
                document.getElementById("lblskills").style.visibility="visible";
                return false;
            }
            if(dob.value.trim()=="")
            {
                dob.style.border="3px solid red";
                document.getElementById("lbldob").style.visibility="visible";
                return false;
            }
            if((male.checked==false)&&(female.checked==false))
            {
                 document.getElementById("lblgender").style.visibility="visible";
                return false;
            }
           
        }
        function valid_search(){
            var keyword=document.getElementById("keyword_find");
            var loc=document.getElementById("loc_find");
            var exp=document.getElementById("exp_find");          
            if(keyword.value.trim()=="")
            {
                document.getElementById("lblkeyword").style.visibility="visible";
               return false;
            }
            if(loc.value.trim()=="")
            {
                document.getElementById("lblloc").style.visibility="visible";
                return false;
            }
            if(exp.value.trim()=="")
            {
                dob.style.border="3px solid red";
                document.getElementById("lblexp").style.visibility="visible";
                return false;
            }
        
           
        }
        