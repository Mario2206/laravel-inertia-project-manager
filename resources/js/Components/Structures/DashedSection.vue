<template>
    <section >
        <h2>
            {{ title }}
        </h2>
        <div :class="class">
            <slot></slot>
        </div>

    </section>
</template>

<script>
    export default {
        name : "DashedSection",
        props: {
            title : String,
            class : String
        }

    }
</script>
