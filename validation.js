        function emailValidation(value) {
            const emailRegExp = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            const isEmailValid = emailRegExp.test(value);
            return isEmailValid
        }

        function passwordValidation(value) {
            const passwordRegexp = /^[A-Za-z]\w{7,14}$/
            const isPasswordValid = passwordRegexp.test(value)
            return isPasswordValid
        }
        

        function Submit(event) {
            console.log("jhjjkfdj")
            const email = document.querySelector('#email').value
            const isEmailvaild = emailValidation(email)
            const password = document.querySelector('#password').value
             isPasswordValid = passwordValidation(password)

            if (!isEmailvaild) {
                return alert(`${email} is not valid`)
            }
            if (!isPasswordValid) {
                return alert(`${password} is incorrect `)
            }
        }
