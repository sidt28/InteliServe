function setData() 
        {
          const txt = `Welcome to<np> WARRIOR GAGE<np>`;
          const outputDiv = document.getElementById('typed-content');
          return [txt, outputDiv]
        };
function typeText() 
        {
          const res =  setData();
          const txt = res[0];
          const outputDiv = res[1];
          const splittedTxt = txt.split('<np>');
          let pElements = [];
          splittedTxt.forEach((item, index) => 
          {
          const p = document.createElement('p');
          outputDiv.appendChild(p);
          });
          const allParas = outputDiv.querySelectorAll('p');
          let i = 0;
          let currentPara = 0;
          const timerId = setInterval(() => {
          allParas[currentPara].innerHTML += splittedTxt[currentPara].charAt(i);
          i++;
          if (i === splittedTxt[currentPara].length) {
          currentPara++;
          i=0;
          if (currentPara === splittedTxt.length) {
          clearInterval(timerId);
          }
          }
          },50);
        }
