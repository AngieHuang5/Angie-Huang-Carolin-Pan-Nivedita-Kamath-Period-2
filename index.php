<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <title>Document</title>
  </head>
  <body>
    <script src="app.js"></script>
    <div class=”calculator”>
      <div class=”calculator__display”>0</div>
      <div class=”calculator__keys”>
        <button class="key--operator" data-action="add">+</button>
        <button class="key--operator" data-action="subtract">-</button
        <button class="key--operator" data-action="multiply">&times;</button>
        <button class="key--operator" data-action="divide">÷</button
        <button>7</button>
        <button>8</button>
        <button>9</button>
        <button>4</button>
        <button>5</button>
        <button>6</button>
        <button>1</button>
        <button>2</button>
        <button>3</button>
        <button>0</button>
        <button data-action="decimal">.</button>
        <button data-action="clear">AC</button>
        <button class="key--equal" data-action="calculate">=</button>
      </div>
        const calculator = document.querySelector(‘.calculator’)
        const keys = calculator.querySelector(‘.calculator__keys’)
        const display = document.querySelector('.calculator__display')
        keys.addEventListener(‘click’, e => {
            if (e.target.matches(‘button’)) {
                const key = e.target
                const action = key.dataset.action
                const keyContent = key.textContent
                const displayedNum = display.textContent
                }
            })
            const key = e.target
            const action = key.dataset.action
        if (!action) {
            if (displayedNum === '0') {
            display.textContent = keyContent
        } else {
            display.textContent = displayedNum + keyContent
            }
        }
        if (
            action === 'add' ||
            action === 'subtract' ||
            action === 'multiply' ||
            action === 'divide'
        ) {
            {
  key.classList.add('is-depressed')
}
        if (action === 'decimal') {
            display.textContent = displayedNum + '.'
        }

        if (action === 'clear') {
            console.log('clear key!')
        }

if (action === 'calculate') {
  console.log('equal key!')
}
  </body>
</html>
