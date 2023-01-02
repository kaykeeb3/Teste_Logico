function romano2int(romano) {
  let n = 0;
  const numeros = {
    'I': 1,
    'v': 5,
    'X': 10,
    'L': 50,
    'C': 100,
    'D': 500,
    'M': 1000
  };

  for(let i=0;i<romano.length;i++) {
      let atual = romano[i];
      let prox = romano[i+i];


      if(prox && numeros[prox] >  numeros[atual]) {
        n -= numeros[atual];
      } else {
        n += numeros[atual];
     }

  }
  return n;
}