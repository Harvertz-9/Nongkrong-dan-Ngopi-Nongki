<template>
  <Disclosure as="nav" class="relative bg-amber-950/95 backdrop-blur-sm after:pointer-events-none after:absolute after:inset-x-0 after:bottom-0 after:h-px after:bg-amber-800/30" v-slot="{ open }">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="relative flex h-16 items-center justify-between">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <DisclosureButton class="relative inline-flex items-center justify-center rounded-md p-2 text-amber-200 hover:bg-amber-800/50 hover:text-white focus:outline-2 focus:-outline-offset-1 focus:outline-amber-500">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <Bars3Icon v-if="!open" class="block size-6" aria-hidden="true" />
            <XMarkIcon v-else class="block size-6" aria-hidden="true" />
          </DisclosureButton>
        </div>
        <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
          <div class="flex shrink-0 items-center">
            <span class="text-xl font-bold text-amber-100 tracking-wide">☕ Nongki</span>
          </div>
          <div class="hidden sm:ml-6 sm:block">
            <div class="flex space-x-1">
              <a v-for="item in navigation" :key="item.name" :href="item.href" :class="[item.current ? 'bg-amber-800/60 text-white' : 'text-amber-200 hover:bg-amber-800/40 hover:text-white', 'rounded-md px-3 py-2 text-sm font-medium transition-colors duration-200']" :aria-current="item.current ? 'page' : undefined">{{ item.name }}</a>
            </div>
          </div>
        </div>
        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
          <button type="button" class="relative rounded-full p-1 text-amber-200 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-amber-500">
            <span class="absolute -inset-1.5"></span>
            <span class="sr-only">Keranjang Belanja</span>
            <ShoppingCartIcon class="size-6" aria-hidden="true" />
          </button>

          <!-- Profile dropdown -->
          <Menu as="div" class="relative ml-3">
            <MenuButton class="relative flex rounded-full focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-amber-500">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">Open user menu</span>
              <img class="size-8 rounded-full bg-amber-800 outline -outline-offset-1 outline-amber-700/50" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
            </MenuButton>

            <transition enter-active-class="transition ease-out duration-100" enter-from-class="transform opacity-0 scale-95" enter-to-class="transform scale-100" leave-active-class="transition ease-in duration-75" leave-from-class="transform scale-100" leave-to-class="transform opacity-0 scale-95">
              <MenuItems class="absolute right-0 z-50 mt-2 w-56 origin-top-right rounded-lg bg-amber-900 py-2 outline -outline-offset-1 outline-amber-700/50 shadow-xl shadow-black/20 ring-1 ring-amber-700/30">
                <MenuItem v-slot="{ active }">
                  <a href="#" :class="[active ? 'bg-amber-800/60 outline-hidden' : '', 'block px-4 py-2.5 text-sm text-amber-200 rounded-md mx-1']">Profil Saya</a>
                </MenuItem>
                <MenuItem v-slot="{ active }">
                  <a href="#" :class="[active ? 'bg-amber-800/60 outline-hidden' : '', 'block px-4 py-2.5 text-sm text-amber-200 rounded-md mx-1']">Pesanan Saya</a>
                </MenuItem>
                <div class="my-1.5 border-t border-amber-700/40"></div>
                <MenuItem v-slot="{ active }">
                  <a href="#" :class="[active ? 'bg-amber-800/60 outline-hidden' : '', 'block px-4 py-2.5 text-sm text-red-400 rounded-md mx-1']">Keluar</a>
                </MenuItem>
              </MenuItems>
            </transition>
          </Menu>
        </div>
      </div>
    </div>

    <DisclosurePanel class="sm:hidden">
      <div class="space-y-1 px-2 pt-2 pb-3">
        <DisclosureButton v-for="item in navigation" :key="item.name" as="a" :href="item.href" :class="[item.current ? 'bg-amber-800/60 text-white' : 'text-amber-200 hover:bg-amber-800/40 hover:text-white', 'block rounded-md px-3 py-2 text-base font-medium transition-colors duration-200']" :aria-current="item.current ? 'page' : undefined">{{ item.name }}</DisclosureButton>
      </div>
    </DisclosurePanel>
  </Disclosure>
</template>

<script setup>
import { Disclosure, DisclosureButton, DisclosurePanel, Menu, MenuButton, MenuItem, MenuItems } from '@headlessui/vue'
import { Bars3Icon, ShoppingCartIcon, XMarkIcon } from '@heroicons/vue/24/outline'

const navigation = [
  { name: 'Home', href: '#', current: true },
  { name: 'Menu', href: '#', current: false },
  { name: 'About Us', href: '#', current: false },
  { name: 'Contact', href: '#', current: false },
]
</script>
