<template>
    <table class="bg-white w-full ">
        <tr class="h-16 border-b-2 bg-gray-100 ">
            <th class="text-left px-5 text-gray-500">RAISON SOCIALE</th>
            <th class="text-left px-5 text-gray-500">DESCRIPTION</th>
            <th class="text-left px-5 text-gray-500">PROJETS</th>
            <th class="text-left px-5 text-gray-500"></th>
        </tr>
        <tr v-for="client in clients" :key="client.id" class="h-16 border-b-2">
            <td class="font-bold px-5 ">
                {{ client.business_name }}
            </td>
            <td class="px-5 ">
                {{ client.description.substring(0, 10) }} ...
            </td>
            <td class="px-5 ">
                {{ client.projects_quantity }}
            </td>
            <td>
                <inertia-link :href="route('clients.edit', {id : client.id})" class="text-indigo-500">
                    Editer
                </inertia-link>
            </td>
        </tr>
    </table>
</template>

<script>
    import JetNavLink from '@/Jetstream/NavLink'


    export default {
        name : "ClientList",
        components: {
            JetNavLink
        },
        props: {
            clients : Array
        }
    }
</script>
