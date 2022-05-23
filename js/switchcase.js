"use strict"

while (true) {
    let costume_type = window.prompt("Ölçü belirtin => B: büyük, O: Orta, K: küçük")
/*    Swal.fire({
        title: 'Error!',
        text: 'Do you want to continue',
        icon: 'error',
        confirmButtonText: 'Cool'
    })*/


    switch (costume_type) {
        case 'b':
        case 'B':
            window.alert("Büyük boy alındı.")
            break

        case 'o':
        case 'O':
            window.alert("Büyük boy alındı.")
            break

        case 'k':
        case 'K':
            window.alert("Büyük boy alındı.")
            break

        default:
            window.alert("Yanlış tercih yaptınız!")
            continue
    }

    break
}
