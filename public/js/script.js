let deleteBtns = document.querySelectorAll('.delete');
if (deleteBtns) {
    deleteBtns.forEach(btn => {
        btn.addEventListener('click', deleteConfirmation)
    });
}
function deleteConfirmation(e) {
    e.preventDefault();
    var link = this.getAttribute('href')

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {

            window.location.href=link;
            // Swal.fire(
            //     'Deleted!',
            //     'Your file has been deleted.',
            //     'success'
            // )
        }
    });

}

