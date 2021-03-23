<template>
    <div class=" py-8 border-b-2">
        <div class="w-5/6 flex justify-between items-center">
            <label :for="name" class="text-gray-700 font-bold">
                <slot name="label"></slot>
            </label>
            <slot></slot>
        </div>

    </div>
</template>

<script>
    export default {
        name : "InputWrapper",
        props: {
            name: String
        }
    }
</script>
