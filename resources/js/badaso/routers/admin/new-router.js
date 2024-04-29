import AboutPages from "./../../pages/about/index.vue";

const prefix = process.env.MIX_ADMIN_PANEL_ROUTE_PREFIX
  ? "/" + process.env.MIX_ADMIN_PANEL_ROUTE_PREFIX
  : "/badaso-dashboard";

export default [
  {
    path: prefix + "/about",
    name: "About",
    component: AboutPages,
    meta: {
      title: "About",
    },
  },
];
