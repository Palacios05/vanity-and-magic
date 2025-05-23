export default [
  {
    title: 'Dashboard',
    to: { name: 'root' },
    icon: { icon: 'ri-pie-chart-box-line' },
  },
  { heading: 'Accesos' },
  {
    title: 'Roles y Permisos',
    to: { name: 'second-page' },
    icon: { icon: 'ri-lock-password-line' },
  },
  {
    title: 'Usuarios',
    to: { name: 'second-page' },
    icon: { icon: 'ri-group-line' },
  },
  {
    title: 'Configuraciones',
    icon: { icon: 'ri-tools-line' },
    children: [
      {
        title: 'Sucursales',
        to: 'dashboards-crm',
        icon: { icon: 'ri-radio-button-line' },
      },
      {
        title: 'Almacenes',
        to: 'dashboards-crm',
        icon: { icon: 'ri-radio-button-line' },
      },
      {
        title: 'Categorias',
        to: 'second-page',
        icon: { icon: 'ri-radio-button-line' },
      },
      {
        title: 'Proveedores',
        to: 'second-page',
        icon: { icon: 'ri-radio-button-line' },
      },
      {
        title: 'Unidades',
        to: 'second-page',
        icon: { icon: 'ri-radio-button-line' },
      },
    ],
  },
  { heading: 'Comercial' },
  {
    title: 'Productos',
    icon: { icon: 'ri-product-hunt-line' },
    children: [
      {
        title: 'Registrar',
        to: 'dashboards-crm',
        icon: { icon: 'ri-radio-button-line' },
      },
      {
        title: 'Listado',
        to: 'second-page',
        icon: { icon: 'ri-radio-button-line' },
      },
    ],
  },
  {
    title: 'Clientes',
    icon: { icon: 'ri-p2p-line' },
    to: 'second-page',
  },
  {
    title: 'Ventas',
    icon: { icon: 'ri-money-dollar-box-line' },
    children: [
      {
        title: 'Registrar',
        to: 'dashboards-crm',
        icon: { icon: 'ri-radio-button-line' },
      },
      {
        title: 'Listado',
        to: 'second-page',
        icon: { icon: 'ri-radio-button-line' },
      },
    ],
  },
  {
    title: 'Devolución',
    icon: { icon: 'ri-loop-right-line' },
    to: 'second-page',
  },
  { heading: 'Almacen' },
  {
    title: 'Compras',
    icon: { icon: 'ri-box-3-line' },
    children: [
      {
        title: 'Registrar',
        to: 'dashboards-crm',
        icon: { icon: 'ri-computer-line' },
      },
      {
        title: 'Listado',
        to: 'second-page',
        icon: { icon: 'ri-bar-chart-line' },
      },
    ],
  },
  {
    title: 'Transporte',
    icon: { icon: 'ri-translate' },
    children: [
      {
        title: 'Registrar',
        to: 'dashboards-crm',
        icon: { icon: 'ri-computer-line' },
      },
      {
        title: 'Listado',
        to: 'second-page',
        icon: { icon: 'ri-bar-chart-line' },
      },
    ],
  },
  {
    title: 'Conversión',
    icon: { icon: 'ri-file-ppt-2-line' },
    to: 'second-page',
  },
  {
    title: 'Kardex',
    to: { name: 'second-page' },
    icon: { icon: 'ri-draft-line' },
  },
]
