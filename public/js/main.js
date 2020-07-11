$(() => {
    $('.delete').on('click', (e) => {
        e.preventDefault();
        let is_confirm = confirm('Are you sure?');
        if (is_confirm) {
            let url = e.target.getAttribute('data-url');
            $.ajax({
                type: "post",
                dataType: "json",
                url: url,
                data: [],
                success: (response) => {
                    console.log(response)
                    if (response.type == "success") {
                        location.reload();
                    }else{
                        alert('something went wrong !!');
                    }
                }
            });
        }
    });
});