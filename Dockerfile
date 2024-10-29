#############################################
# App Builder: From developrnt to production
#############################################
FROM node:lts-alpine as builder
WORKDIR /app

# BUILD WEBSITE
COPY ./package*.json .
RUN npm install

COPY . .
RUN npm prune --production

############################################
# Website: Production image website
############################################
FROM node:lts-alpine as website

WORKDIR /app

COPY --from=builder /app/node_modules node_modules
COPY --from=builder /app/package.json package.json

ENV NODE_ENV=production
RUN npm run build

EXPOSE 3000
ENTRYPOINT ["node", "build"]