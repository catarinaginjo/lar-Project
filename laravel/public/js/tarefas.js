window.onload = function() {
    window.tarefas_app = new Vue({
        el: "#tarefas_app",
        delimiters: ["[[", "]]"],
        data: {
            titulo: "Catarina",
            utenteId: 1,
            tasks: [],
            currentDate: moment()
        },
        methods: {
            previousDay: function() {
                this.currentDate = this.currentDate.subtract(1, "days").clone();
                this.fetchTasks();
            },
            nextDay: function() {
                if (moment().diff(this.currentDate, "days") <= 0) {
                    return;
                }
                this.currentDate = this.currentDate.add(1, "days").clone();
                this.fetchTasks();
            },
            fetchTasks: function() {
                var self = this;
                axios.post("/api/utentes/" + this.utenteId + "/tarefas", {
                    date: this.currentDate.format("YYYY-MM-DD")
                }).then(function (response) {
                    self.tasks = response.data;
                });
            }
        },
        mounted: function() {
            this.fetchTasks();
        }
    });
}