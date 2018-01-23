module.exports = {
  plugins: [
    require(`postcss-reporter`)({clearReportedMessages: true}),
    require(`postcss-will-change`),
    require(`postcss-import`),
    require(`postcss-cssnext`),
  ],
};
