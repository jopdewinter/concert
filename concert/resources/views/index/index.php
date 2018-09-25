<!DOCKTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <title>test</title>
        <!--css-->
        <script src="https://unpkg.com/vue"></script>
    </head>
    <body>
        <div id="vue-app">
            <p>name: {{ test }}</p>
            <p>description: {{ description }}</p>
            <p>origin: {{ origin }}</p>
        </div>

        <script>
            new Vue({
                data: {
                    message: ''
                },
                methods: {
                    refreshMessage:function(resource) {
                        this.$http.get('/getAll').then((response) {
                            this.message = response.data.message;
                        });
                    }
                }
            });

            Vue.component('sub-component', {
                template: '<div>{{ message }}</div>',
                props: [ 'message' ]
                methods: {
                    refreshMessage:function() {
                        this.$emit('refreshMessage');
                    }
                }
            });
        </script>
    </body>
</html>