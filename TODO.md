# TODO List for Mons Magna Product and Inventory Management System Prototype

## Models Creation
- [x] Create app/Models/ProductModel.php for Products table interactions
- [x] Create app/Models/OrderModel.php for Orders table interactions
- [x] Create app/Models/CustomerModel.php for Customers table interactions
- [x] Create app/Models/MaterialModel.php for Materials table interactions
- [x] Create app/Models/UserModel.php for Users table interactions

## Controllers Creation
- [x] Create app/Controllers/ProductController.php for catalog management
- [x] Create app/Controllers/OrderController.php for order placement and management
- [x] Create app/Controllers/InventoryController.php for materials management
- [x] Create app/Controllers/UserController.php for authentication and roles

## Views Creation
- [x] Create app/Views/login.php for user login
- [x] Create app/Views/dashboard.php for main dashboard overview
- [x] Create app/Views/product_catalog.php for displaying design catalog
- [x] Create app/Views/order_form.php for custom order form
- [x] Create app/Views/inventory_dashboard.php for inventory stock levels

## Configuration and Assets
- [ ] Update app/Config/Routes.php to define routes for controllers
- [ ] Create public/css/style.css for custom styles (Bootstrap integration)
- [ ] Create public/js/script.js for interactivity

## Followup Steps
- [ ] Import SQL seed into database (run seeder or manual import)
- [ ] Test application locally (via XAMPP)
- [ ] Enhance UI with placeholders for shoe design images
- [ ] Add form validation and error handling
- [ ] Integrate basic authentication using Users table
