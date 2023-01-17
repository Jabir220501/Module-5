const voornaam = document.getElementById("voornaam")
const achternaam = document.getElementById("achternaam")
const submit = document.getElementById("submit")


submit.addEventListener("click", () => {
    alert(`${voornaam.value}\n${achternaam.value}`)
})