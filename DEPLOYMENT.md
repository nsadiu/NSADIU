# Deploying NSA-DIU to Render.com

## Prerequisites
- GitHub account
- Render.com account (free)
- Your Laravel project code

## Step 1: Prepare Your Project

1. Make sure all configuration files are in place:
   - ✅ `render.yaml` (service configuration)
   - ✅ `render-build.sh` (build script)
   - ✅ `.env.example` (environment variables template)

2. Make the build script executable:
   ```bash
   git update-index --chmod=+x render-build.sh
   ```

## Step 2: Push to GitHub

1. Initialize Git (if not already done):
   ```bash
   git init
   git add .
   git commit -m "Initial commit - NSA-DIU Laravel Application"
   ```

2. Create a new repository on GitHub:
   - Go to https://github.com/new
   - Name it: `nsa-diu` (or your preferred name)
   - Don't initialize with README
   - Create repository

3. Push your code:
   ```bash
   git remote add origin https://github.com/YOUR_USERNAME/nsa-diu.git
   git branch -M main
   git push -u origin main
   ```

## Step 3: Deploy on Render.com

1. **Sign up/Login to Render.com**
   - Go to https://render.com
   - Sign up with GitHub account

2. **Create New Blueprint**
   - Click "New +"
   - Select "Blueprint"
   - Connect your GitHub repository
   - Render will automatically detect `render.yaml`

3. **Configure Environment Variables**
   Render will create the services. For the web service, add these environment variables:
   
   - `APP_NAME` = NSA-DIU
   - `APP_ENV` = production
   - `APP_DEBUG` = false
   - `APP_KEY` = (Generate using: `php artisan key:generate --show`)
   - `APP_URL` = (Your Render URL, e.g., https://nsa-diu.onrender.com)
   
   For Database (auto-created):
   - `DB_CONNECTION` = mysql
   - `DB_HOST` = (Auto-filled by Render)
   - `DB_PORT` = 3306
   - `DB_DATABASE` = nsadiu
   - `DB_USERNAME` = (Auto-filled by Render)
   - `DB_PASSWORD` = (Auto-filled by Render)

4. **Deploy**
   - Click "Apply"
   - Render will start building and deploying
   - First deployment takes 5-10 minutes

## Step 4: Generate Application Key

After first deployment:

1. Go to your web service in Render dashboard
2. Click "Shell" tab
3. Run:
   ```bash
   php artisan key:generate --show
   ```
4. Copy the generated key
5. Go to "Environment" tab
6. Update `APP_KEY` with the generated value
7. Save and redeploy

## Step 5: Verify Deployment

1. Open your Render URL (e.g., https://nsa-diu.onrender.com)
2. Check if the website loads correctly
3. Test all pages and features

## Troubleshooting

### Build Fails
- Check build logs in Render dashboard
- Ensure `composer.json` and `package.json` are committed
- Verify `render-build.sh` has correct permissions

### Database Connection Issues
- Verify database environment variables in Render dashboard
- Check if database service is running
- Ensure migrations ran successfully

### 500 Error
- Enable debug mode temporarily: Set `APP_DEBUG=true`
- Check logs in Render dashboard
- Verify storage permissions

### Assets Not Loading
- Ensure `npm run build` completed successfully
- Check `public/build` directory exists
- Verify `vite.config.js` is configured correctly

## Auto-Deployment

Render automatically deploys when you push to GitHub:
```bash
git add .
git commit -m "Your changes"
git push origin main
```

## Free Tier Limitations

- Web service spins down after 15 minutes of inactivity
- First request after spin-down takes ~30 seconds
- 750 hours/month free (multiple services share this)
- Database: 1GB storage, 97 connection limit

## Upgrading Performance

To prevent spin-downs (paid):
- Upgrade to "Starter" plan ($7/month)
- Keep service always running

---

**Need Help?**
- Render Docs: https://render.com/docs
- Laravel Deployment: https://laravel.com/docs/deployment

**Your Application:**
- GitHub: https://github.com/YOUR_USERNAME/nsa-diu
- Render: https://dashboard.render.com
