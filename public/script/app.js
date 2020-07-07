const app = {

    init: function() {
        app.home.init();
    },

    home: {
        init: function() {

            this.calendar.init();
        },

        calendar: {
            init: function() {
                if (document.querySelectorAll('.calendarCard .modify')) {
                    const calendarModify = document.querySelectorAll('.calendarCard .modify')
                    calendarModify.forEach((modifyButton) => {
                        modifyButton.addEventListener("click", this.handleClickModify);
                    })
                };

                if (document.querySelectorAll('.calendarCard .delete')) {
                    const calendarDelete = document.querySelectorAll('.calendarCard .delete')
                    calendarDelete.forEach((deleteButton) => {
                        deleteButton.addEventListener("click", this.handleClickDelete);
                    })
                };
            },

            handleClickModify: function() {
                console.log("click modifie");
            },

            handleClickDelete: function() {
                console.log("delete");
            },

        },
    }

}

document.addEventListener("DOMContentLoaded", app.init);