# CFC Blue Team - 2024

## Development Notes

Ensure you have installed all Composer & NPM dependencies.

## Running Locally

`php artisan serve`

## Modifying CSS w/ browser refresh

You'll also need to be running the site (Either following the steps in "Running Locally" or on a web server)

`npm run dev`

## Compiling CSS

`npm run build`

## New Database Setup

```
cd $WEB_ROOT
php artisan migrate --seed
```

## Resetting Admin Password

If you've lost the admin password, run the following commands from the web server terminal.

```
cd $WEB_ROOT
php artisan tinker
$u = App\Models\User::find(1);
$u->password = Illuminate\Support\Facades\Hash::make('NEW_PASSWORD');
$u->save();
exit();
```
