<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Projects
            </h2>
            <a href="">+ Créer un projet</a>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <table>
                        <tr>
                            <th>TITRE</th>
                            <th>CLIENT</th>
                            <th>DESCRIPTION</th>
                            <th>TICKETS</th>

                        </tr>

                        <tr v-for="project in projects" :key="project.id">
                            <td>
                                {{project.title}}
                            </td>
                            <td>
                                {{project.manager_name}}
                            </td>
                            <td>
                                {{project.description.substr(0,20)}}...
                            </td>
                            <td>
                                {{project.status}}
                            </td>
                            <td>
                               <a href="">Editer</a>
                            </td>
                        </tr>


                    </table>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    export default {
        props: ['projects'],
        components: {
            AppLayout,
        },
    }
</script>
