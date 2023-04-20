const { createApp } = Vue

createApp({
    data() {
        return {
            todoList: [],
            todoItem : '',
            
        }
    },
    methods:{
        readList(){
            axios.get('server.php')
            .then(response =>{
                console.log(response);
                this.todoList = response.data;
            })
        },
        addTodo(){
            
                const data = {
                    todoItem : this.todoItem,
                };
                axios.post('server.php', data,
                {
                    headers: { 'Content-Type': 'multipart/form-data'}
                }
                ).then(response => {
                    this.todoList = response.data;
                    this.todoItem = '';
                });

            
            
        },
        addTodoCheck(){
            if(this.todoItem && this.todoItem.trim() !=''){
                this.addTodo();
            }
        }

    },
    mounted(){
        this.readList();
    }
}).mount('#app')