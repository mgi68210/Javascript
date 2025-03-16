// 1

function show(n) {
    document.getElementById("text").value += n + " ";
}

for (let i = 1; i <= 200; i++) {
    document.write(`<button onclick="show(${i})">${i}</button>`);
}

// Utilisation de document.write pour ajouter les boutons directement au corps du document






