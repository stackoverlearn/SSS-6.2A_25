document.querySelectorAll('.btn-delete').forEach((button) => {
    button.addEventListener('click', function(event) {
        event.preventDefault()
        if (confirm("Are you sure?")) {
            let action = this.getAttribute('href')
            let form = document.getElementById('form-delete')
            form.setAttribute('action', action)
            form.submit()
        }
    })
})