<template>
    <div class="bg-white">
        <header class="py-7">
            <h2 class="font-bold text-2xl text-gray-900">
                {{ title }}
            </h2>
            <h3 class="text-gray-500 mt-5">
                {{ subtitle }}
            </h3>
        </header>
        <div  @submit="submit">
            <div class="my-5 border-t-2">
                <slot></slot>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: "FormWrapper",
        emits : ["cancel", "submit"],
        props: {
            title: String,
            subtitle: String
        },
        methods: {
            submit() {
                this.$emit("submit")
            },
            cancel() {
                this.$emit("cancel")
            }
        }
    }
</script>


