const { createApp } = Vue

createApp({
    data() {
        return {
            todoList: [],
            todoItem : {
                task:'',
                done:false,
            },
            
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
                    task : this.todoItem.task,
                    done : this.todoItem.done,
                };
                axios.post('server.php', data,
                {
                    headers: { 'Content-Type': 'multipart/form-data'}
                }
                ).then(response => {
                    this.todoList = response.data;
                    this.todoItem.task = '';
                    this.todoItem.done = false;
                });

            
            
        },
        addTodoCheck(){
            if(this.todoItem.task && this.todoItem.task.trim() !=''){
                this.addTodo();
            }
        }

    },
    mounted(){
        this.readList();
    }
}).mount('#app')