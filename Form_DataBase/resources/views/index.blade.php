<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/favicon-32x32.ico" type="image/x-icon">
    <title>Formulário</title>
</head>
<body>
    <!-- Campo esquerdo da página -->
    <div id="title-place">
        <h1 id="title">Formulário</h1>
        <p id="subtitle">Formulário html e css.</p>
    </div>

    <!-- Campo direito da página -->
    <div id="form-place">
        <form>
            @csrf
            <!-- Título -->
            <header id="form__header">
                <h1 id="form__title">Cadastro</h1>
            </header>

            <!-- Campos do formulário -->
            <section id="form__section">
                <main id="form__divs">
                    <!-- Nome e Sobrenome -->
                    <fieldset id="form__fieldset-name">
                        <div class="form__div">
                            <input type="text" class="form__input" placeholder=" " name="name" id="name" required>
                            <label for="name" class="form__label">Nome</label>
                        </div>
                        <div class="form__div">
                            <input type="text" class="form__input" placeholder=" " name="surname" id="surname" required>
                            <label for="surname" class="form__label">Sobrenome</label>
                        </div>
                    </fieldset>

                    <!-- Telefone -->
                    <div class="form__div">
                        <input type="tel" class="form__input" placeholder=" " name="phone" id="phone" required>
                        <label for="phone" class="form__label">Telefone</label>
                    </div>

                    <!-- Email -->
                    <div class="form__div">
                        <input type="email" class="form__input" placeholder=" " name="email" id="email" required>
                        <label for="email" class="form__label">Email</label>
                    </div>

                    <!-- Endereço -->
                    <div class="form__div">
                        <input type="text" class="form__input" placeholder=" " name="address" id="address" required>
                        <label for="address" class="form__label">Endereço</label>
                    </div>
                </main>
            </section>

            <!-- Botões -->
            <footer id="form__footer">
                <!-- Botão de cadastrar -->
                <button type="button" class="form__button"><a href="{{ route('SiteController.getData') }}">Cadastrar</a></button>

                <!-- Botão de limpar os campos -->
                <button type="reset" class="form__button">Limpar</button>
            </footer>

        </form>
    </div>
</body>
</html>