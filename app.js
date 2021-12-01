keys.addEventListener('click', e => {
    if (e.target.matches('button')) return
    const key = e.target
    const calculate = (n1, operator, n2) => {
        const firstNum = parseFloat(n1)
        const secondNum = parseFloat(n2)
        if (operator === 'add') return firstNum + secondNum
        if (operator === 'subtract') return firstNum - secondNum
        if (operator === 'multiply') return firstNum * secondNum
        if (operator === 'divide') return firstNum / secondNum
      }
    const getKeyType = (key) => {
        const { action } = key.dataset
        if (!action) return 'number'
        if (
          action === 'add' ||
          action === 'subtract' ||
          action === 'multiply' ||
          action === 'divide'
        ) return 'operator'
        // For everything else, return the action
        return action
      }
    const updateCalculatorState = (key, calculator) => {
        const keyType = getKeyType(key)
        
        if (!action) {
            return displayedNum === '0' ||
      previousKeyType === 'operator' ||
      previousKeyType === 'calculate'
      ? keyContent
      : displayedNum + keyContent
            }
          calculator.dataset.previousKeyType = 'number'
        }
        
        if (action === 'decimal') {
            display.textContent = displayedNum + '.'
        } else if (
          previousKeyType === 'operator' ||
          previousKeyType === 'calculate'
        ) {
          display.textContent = '0.'
        }
          calculator.dataset.previousKeyType = 'decimal'
        }
        
        if (
          action === 'add' ||
          action === 'subtract' ||
          action === 'multiply' ||
          action === 'divide'
        ) {
            const firstValue = calculator.dataset.firstValue
            const operator = calculator.dataset.operator
            const secondValue = displayedNum
            
            if (
              firstValue &&
              operator &&
              previousKeyType !== 'operator' &&
              previousKeyType !== 'calculate'
            ) {
              const calcValue = calculate(firstValue, operator, secondValue)
              display.textContent = calcValue
              calculator.dataset.firstValue = calcValue
            } else {
              calculator.dataset.firstValue = displayedNum
            }
            
            key.classList.add('is-depressed')
            calculator.dataset.previousKeyType = 'operator'
            calculator.dataset.operator = action
          }
        
        if (action === 'clear') {
                if (key.textContent === 'AC') {
                  calculator.dataset.firstValue = ''
                  calculator.dataset.modValue = ''
                  calculator.dataset.operator = ''
                  calculator.dataset.previousKeyType = ''
                } else {
                  key.textContent = 'AC'
                }
              }
          calculator.dataset.previousKeyType = 'clear'
        }
        
        if (action === 'calculate') {
            let firstValue = calculator.dataset.firstValue
            const operator = calculator.dataset.operator
            let secondValue = displayedNum
            
            if (firstValue) {
              if (previousKeyType === 'calculate') {
                firstValue = displayedNum
                secondValue = calculator.dataset.modValue
              }
              
              display.textContent = calculate(firstValue, operator, secondValue)
            }
            
            calculator.dataset.modValue = secondValue
            calculator.dataset.previousKeyType = 'calculate'
          }
      }
    const displayedNum = display.textContent
    if (keyType === 'operator') {
        key.classList.add('is-depressed')
        calculator.dataset.operator = key.dataset.action
        calculator.dataset.firstValue = firstValue &&
          operator &&
          previousKeyType !== 'operator' &&
          previousKeyType !== 'calculate'
          ? calculatedValue
          : displayedNum
      }
      
      if (action !== 'clear') {
        const clearButton = calculator.querySelector('[data-action=clear]')
        clearButton.textContent = 'CE'
      }
    // Pure functions
    const resultString = createResultString(key, displayedNum, calculator.dataset)
    
    // Update states
    display.textContent = resultString
    updateCalculatorState(key, calculator, resultString, displayedNum)
    updateVisualState(key, calculator)
  })