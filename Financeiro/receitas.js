const transactionsUl = document.querySelector('#transactions')
const balanceDisplay = document.querySelector('#balance')
const incomeDisplay = document.querySelector('#money-plus')

let transactions = JSON.parse(localStorage.getItem('transactions')) || []

const addTransactionIntoDom = ({ amount }) => {
  const li = document.createElement('li')
  li.classList.add('plus')
  li.innerHTML = `R$ ${amount}`
  transactionsUl.append(li)
}

const updateBalanceValues = () => {
  const transactionsAmounts = transactions.map(({ amount }) => amount)
  const total = transactionsAmounts.reduce((acc, amount) => acc + amount, 0)
  const income = total

  balanceDisplay.textContent = `R$ ${total.toFixed(2)}`
  incomeDisplay.textContent = `R$ ${income.toFixed(2)}`
}

const init = () => {
  transactionsUl.innerHTML = ""
  transactions.forEach(addTransactionIntoDom)
  updateBalanceValues()
}

init()

const updateLocalStorage = () => {
  localStorage.setItem("transactions", JSON.stringify(transactions))
}

const form = document.querySelector('#form')
const amountInput = document.querySelector('#amount')

form.addEventListener('submit', event => {
  event.preventDefault()

  const amount = +amountInput.value

  if (amount > 0) {
    const transaction = { amount }
    transactions.push(transaction)
    addTransactionIntoDom(transaction)
    updateBalanceValues()
    updateLocalStorage()
    amountInput.value = ''
  } else {
    alert('Por favor, insira um valor positivo.')
  }
})