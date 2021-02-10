function clickOnStergeLocalitate(id) {
    if (confirm('sigur?')) {
        $.ajax({
            url: '/ajax/sterge_localitate.php',
            data: {
                id: id
            },
            dataType: "json",
            success: function (data) {
                console.log(data);
                location.reload();
            }
        });
    }

}
