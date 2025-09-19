function calcularPegada() {
    const transporte = document.getElementById("transporte").value;
    const energia = document.getElementById("energia").value;

    // Fórmula simples para estimar a pegada de carbono (exemplo)
    const pegadaTransporte = transporte * 0.21; // 0.21 kg CO2 por km
    const pegadaEnergia = energia * 0.233; // 0.233 kg CO2 por kWh

    const pegadaTotal = pegadaTransporte + pegadaEnergia;

    document.getElementById("resultadoPegada").textContent = `Sua pegada de carbono estimada é de ${pegadaTotal.toFixed(2)} kg CO2 por mês.`;
}
