  const passwordInput = document.getElementById('password');
  const showPasswordCheckbox = document.getElementById('showPassword');
  // Agregar un evento de cambio al checkbox
  showPasswordCheckbox.addEventListener('change', function() {
      // Actualizar el tipo de entrada del campo de contraseña
      passwordInput.type = this.checked ? 'text' : 'password';
  });

