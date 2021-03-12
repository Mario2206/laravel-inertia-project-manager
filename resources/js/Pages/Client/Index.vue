<template>
    <app-layout>
        <template #header class="flex">
            <h1 class="text-4xl text-white font-bold">Clients</h1>
            <add-button value="Créer un client"/>
        </template>
        <ClientList :clients="clients" />
    </app-layout>

</template>

<script>
    import AppLayout from "@/Layouts/AppLayout";
    import AddButton from "@/Components/Buttons/AddButton";
    import ClientList from "@/Components/List/ClientList";

    export default {
        props: ["clients"],
        components: {
            ClientList,
            AppLayout,
            AddButton
        }
    }
</script>
