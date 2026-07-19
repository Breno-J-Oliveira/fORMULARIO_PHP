        const users = [
            { username: 'user1', password: 'pass1' },
            { username: 'user2', password: 'pass2' },
            { username: 'user3', password: 'pass3' },
            { username: 'user4', password: 'pass4' },
            { username: 'user5', password: 'pass5' },
            { username: 'user6', password: 'pass6' },
            { username: 'user7', password: 'pass7' },
            { username: 'user8', password: 'pass8' },
            { username: 'user9', password: 'pass9' },
            { username: 'user10', password: 'pass10' }
        ];

        const loginButton = document.querySelector('button');
        let attempts = 3;
        loginButton.addEventListener('click', () => {
            const usernameInput = document.getElementById('username').value;
            const passwordInput = document.getElementById('password').value;

            let authenticated = false;

            do {
                const user = users.find(u => u.username === usernameInput && u.password === passwordInput);
                if (user) {
                    alert('Acesso Liberado');
                    authenticated = true;
                    break;
                } else {
                    attempts--;
                    if (attempts > 0) {
                        alert(`Usuário ou senha incorretos. Tentativas restantes: ${attempts}`);
                    } else {
                        alert('SISTEMA BLOQUEADO - Procure o Suporte');
                        break;
                    }
                }
            } while (!authenticated && attempts > 0);
        });