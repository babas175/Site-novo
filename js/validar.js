function validateName() {
    const nameInput = document.getElementById("nome");
    const cpfInput = document.getElementById("cpf");
    const name = nameInput.value.trim();
    let cpf = cpfInput.value.trim();


    // Verificação do CPF
    const cpfClean = cpf.replace(/\D/g, "");
    let sum = 0;
    let remainder;

    if (cpfClean == "00000000000") {
      alert("Por favor, digite um CPF válido.");
      cpfInput.focus();
      return false;
    }

    for (let i = 1; i <= 9; i++) {
      sum += parseInt(cpfClean.substring(i - 1, i)) * (11 - i);
    }

    remainder = (sum * 10) % 11;

    if (remainder == 10 || remainder == 11) {
      remainder = 0;
    }

    if (remainder != parseInt(cpfClean.substring(9, 10))) {
      alert("Por favor, digite um CPF válido.");
      cpfInput.focus();
      return false;
    }

    sum = 0;

    for (let i = 1; i <= 10; i++) {
      sum += parseInt(cpfClean.substring(i - 1, i)) * (12 - i);
    }

    remainder = (sum * 10) % 11;

    if (remainder == 10 || remainder == 11) {
      remainder = 0;
    }

    if (remainder != parseInt(cpfClean.substring(10, 11))) {
      alert("Por favor, digite um CPF válido.");
      cpfInput.focus();
      return false;
    }

    // Formato do nome
    const formattedName = name
      .split(" ")
      .map(
        (word) => word.charAt(0).toUpperCase() + word.slice(1).toLowerCase()
      )
      .join(" ");
    nameInput.value = formattedName;

    // Preenchimento do CPF com a máscara
    cpfInput.value = cpf;

    return true;
  }

