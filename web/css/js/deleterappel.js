

<li>
<a  class="ui inverted red button" id="del"  type="button" href="{{ path('rappelrdv_delete', { 'idRappelRdv': rappelRdv.idRappelRdv}) }}">Supprimer</a>
    </li>


Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
}).then((result) => {
    if (result.value) {
        Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
        )
    }
})