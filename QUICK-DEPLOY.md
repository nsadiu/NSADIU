# 🚀 Quick Deploy to Render.com

## ⚡ Fast Setup (5 Steps)

### 1️⃣ Generate App Key
Run this command locally and copy the output:
```bash
php artisan key:generate --show
```

### 2️⃣ Push to GitHub
```bash
git init
git add .
git commit -m "Deploy NSA-DIU to Render"
git remote add origin https://github.com/YOUR_USERNAME/nsa-diu.git
git branch -M main
git push -u origin main
```

### 3️⃣ Deploy on Render
1. Go to https://render.com and sign up/login with GitHub
2. Click **"New +"** → **"Blueprint"**
3. Select your **nsa-diu** repository
4. Render will detect `render.yaml` automatically
5. Click **"Apply"**

### 4️⃣ Add Environment Variables
In Render dashboard, go to your web service → Environment:

**Required:**
- `APP_KEY` = (paste the key from Step 1)
- `APP_URL` = https://your-app-name.onrender.com

**Database** (auto-filled by Render, but verify):
- `DB_CONNECTION` = mysql
- `DB_HOST` = (Render provides this)
- `DB_DATABASE` = nsadiu
- `DB_USERNAME` = (Render provides this)
- `DB_PASSWORD` = (Render provides this)

### 5️⃣ Wait & Launch 🎉
- Deployment takes 5-10 minutes
- Visit your site at: **https://your-app-name.onrender.com**

---

## 📋 Important Notes

✅ **Free Tier Includes:**
- 750 hours/month
- 1GB database storage
- Auto-deploy on git push
- SSL certificate (HTTPS)

⚠️ **Free Tier Limitations:**
- Site sleeps after 15 min inactivity
- First load after sleep: ~30 seconds
- Consider upgrading if you need 24/7 uptime

---

## 🔄 Update Your Site

After initial deployment, just push to GitHub:
```bash
git add .
git commit -m "Update site"
git push
```
Render auto-deploys! ✨

---

## 🆘 Troubleshooting

**Build fails?**
- Check Render dashboard logs
- Ensure all files are committed to GitHub

**Site not loading?**
- Verify `APP_KEY` is set
- Check database credentials
- Look at Render logs for errors

**Need more help?**
Read: [DEPLOYMENT.md](./DEPLOYMENT.md)

---

**Your site will be live at:**
`https://nsa-diu.onrender.com` (or your custom name)
