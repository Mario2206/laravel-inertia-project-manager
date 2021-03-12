<template>
    <div>
        <jet-banner />

        <div class="min-h-screen bg-gray-100">
            <div class="bg-gray-800 relative">
                <nav-bar/>
                <!-- Page Heading -->
                <header class="shadow" v-if="$slots.header">
                    <div class="mx-20 py-10 pt-20 px-4 sm:px-6 lg:px-8 flex justify-between">
                        <slot name="header"></slot>
                    </div>
                </header>
                <div class="bg-gray-800 absolute h-40 w-full"></div>
            </div>


            <!-- Page Content -->
            <main class="relative z-10 mx-20">
                <slot></slot>
            </main>
        </div>
    </div>
</template>

<script>
    import JetApplicationMark from '@/Jetstream/ApplicationMark'
    import JetBanner from '@/Jetstream/Banner'
    import JetDropdown from '@/Jetstream/Dropdown'
    import JetDropdownLink from '@/Jetstream/DropdownLink'
    import JetNavLink from '@/Jetstream/NavLink'
    import JetResponsiveNavLink from '@/Jetstream/ResponsiveNavLink'
    import NavBar from "@/Components/Structures/NavBar";

    export default {
        components: {
            NavBar,
            JetApplicationMark,
            JetBanner,
            JetDropdown,
            JetDropdownLink,
            JetNavLink,
            JetResponsiveNavLink,
        },

        data() {
            return {
                showingNavigationDropdown: false,
            }
        },

        methods: {
            switchToTeam(team) {
                this.$inertia.put(route('current-team.update'), {
                    'team_id': team.id
                }, {
                    preserveState: false
                })
            },

            logout() {
                this.$inertia.post(route('logout'));
            },
        }
    }
</script>
