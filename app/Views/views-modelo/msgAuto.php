?>
    <script src='https://unpkg.com/sweetalert2@7.4.0/dist/sweetalert2.all.js'></script>
    <script>
        let timerInterval
        Swal.fire({
        title: 'Auto close alert!',
        html: 'I will close in <b></b> milliseconds.',
        timer: 2000,
        timerProgressBar: true,
        willOpen: () => {
            Swal.showLoading()
            timerInterval = setInterval(() => {
            const content = Swal.getContent()
            if (content) {
                const b = content.querySelector('b')
                if (b) {
                b.textContent = Swal.getTimerLeft()
                }
            }
            }, 100)
        },
        onClose: () => {
            clearInterval(timerInterval)
        }
        }).then((result) => {
        /* Read more about handling dismissals below */
        if (result.dismiss === Swal.DismissReason.timer) {
            console.log('I was closed by the timer')
        }
        })
    </script>
<?php

    