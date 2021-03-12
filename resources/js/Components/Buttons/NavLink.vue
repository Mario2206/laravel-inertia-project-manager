<template>
    <inertia-link :href="href" class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-white group hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
        <span :class="classes">
            <slot></slot>
        </span>
    </inertia-link>
</template>

<script>
export default {
    name: "NavLink",
    props: ['href', 'active'],

    computed: {
        classes() {
            return !this.active
                ? 'transition duration-100 ease-in-out bg-gray-900  bg-opacity-0 group-hover:bg-opacity-100 p-2 rounded '
                : 'transition duration-100 ease-in-out bg-gray-900 p-2 rounded '
        }
    }
}
</script>
