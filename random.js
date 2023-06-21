const listaPaginas = ['a_lenda_do_heroi.html', 'gow.html', 'samorost.html', 'shieldmaiden.html'];

let game = listaPaginas[Math.floor(Math.random() * listaPaginas.length)];

console.log(game);

document.getElementById('botao-random').innerHTML = '<button class="botao-random" onclick="window.location.href= '+ "'" + game + "'" + '">Surpreenda-me...</button>';